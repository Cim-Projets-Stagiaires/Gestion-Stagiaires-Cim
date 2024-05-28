<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Barryvdh\DomPDF\Facade\PDF;

use Illuminate\Support\Facades\View;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Response;
class StagiairesController extends Controller
{

    public function updateAssurance(Request $request, $id)
{
    $request->validate([
        'assurance' => 'required|mimes:pdf',
    ]);

    $assurance = $this->uploadFile($request->assurance, 'assurance');

    $stagiaire = Stagiaire::find($id);
    $stagiaire->assurance = $assurance;
    $stagiaire->save();

    if ($stagiaire->save()) {
        return redirect('/')->with('status', 'L\'assurance a bien été mise à jour.');
    }
}

   

    public function read()
    {
        $stagiaires = Stagiaire::where('validestagiaire', 1)->paginate(10);
    
        return view('index', ['stagiaires' => $stagiaires]);
    }
    
    
    
    public function liste()
    {
        $stagiaires = Stagiaire::where('validestagiaire',0)->get();
        
        return view('listedatent', ['stagiaires' => $stagiaires]);
    }
   
    public function voir(Request $request)
    {
        $stagiaire = Stagiaire::find($request->id);
        $nextStagiaire = Stagiaire::find($request->id + 1);
        $previousStagiaire = Stagiaire::find($request->id - 1);
    
        return view('Voir', [
            'stagiaires' => $stagiaire,
            'nextStagiaire' => $nextStagiaire,
            'previousStagiaire' => $previousStagiaire,
        ]);
    }
    
    public function validationStagire(Request $request)
    {
        $stagiaire = Stagiaire::find($request->id);
        
        // Ensure the stagiaire is found
        if (!$stagiaire) {
            return Redirect('/')->with('error', 'Stagiaire not found');
        }
    
        // Set the start date if not already set
        if (!$stagiaire->date_debut) {
            $stagiaire->date_debut = now();
        }
    
        $stagiaire->validestagiaire = true;
        $stagiaire->save();
    
        return Redirect('/index');
    }
    
    public function cancelStagire(Request $request)
    {
        $stagiaire = Stagiaire::find($request->id);

        if (!$stagiaire) {
            return Redirect('/')->with('error', 'Stagiaire not found');
        }

        /*$pdf_rapport_path = public_path('pdf_reports/' . $stagiaire->pdf_rapport);
        if (file_exists($pdf_rapport_path)) {
            unlink($pdf_rapport_path);
        }*/

        $photo_path = public_path('images/' . $stagiaire->photo);
        if (file_exists($photo_path)) {
            unlink($photo_path);
        }

        $stagiaire->delete();

        return Redirect('/index');
    }
    
    
    
  public function update(Request $request)
    {
        $stagiaire = Stagiaire::find($request->id);

        if (!$stagiaire) {
            return redirect('/')->with('error', 'Stagiaire not found');
        }

        // Validate the request for all fields, allowing any field to be updated
        $request->validate([
            'nom_de_famille' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email',
            'demande_de_stage' => 'nullable|mimes:pdf',
            'etablissement' => 'required|string',
            'pole' => 'required|string',
            'duree_de_stage' => 'required|integer|min:1|max:4', // Assuming 1 to 4 months
        ]);

        // Handle file uploads
        // if ($request->hasFile('semi Rapport de Stage')) {
        //     $this->handleFileUpload($request, $stagiaire, 'semi Rapport de Stage', 'semi Rapport de Stage');
        // }

        // if ($request->hasFile('Rapport finale de Stage')) {
        //     $this->handleFileUpload($request, $stagiaire, 'Rapport finale de Stage', 'Rapport finale de Stage');
        // }

        if ($request->hasFile('demande_de_stage')) {
            $this->handleFileUpload($request, $stagiaire, 'demande de stage', 'demande de stage');
        }

        

        // Update other fields
        $stagiaire->update([
            'nom_de_famille' => $request->input('nom_de_famille'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'etablissement' => $request->input('etablissement'),
            'pole' => $request->input('pole'),
            'duree_de_stage' => $request->input('duree_de_stage'),
        ]);

        return redirect('/index');
    }

   
 private function handleFileUpload($request, $model, $fieldName, $uploadFolder)
 {
     if ($request->hasFile($fieldName)) {
         $file = $request->file($fieldName);
         $fileName = time() . '_' . $file->getClientOriginalName();
         $file->move(public_path($uploadFolder), $fileName);
         $model->$fieldName = $fileName;
         $model->save();
     }
 }
    public function delete(Request $request)
    {
        $stagiaire = Stagiaire::find($request->id);

        if (!$stagiaire) {
            return Redirect('/')->with('error', 'Stagiaire not found');
        }

        /*$pdf_rapport_path = public_path('pdf_reports/' . $stagiaire->pdf_rapport);
        if (file_exists($pdf_rapport_path)) {
            unlink($pdf_rapport_path);
        }*/

        $photo_path = public_path('images/' . $stagiaire->photo);
        if (file_exists($photo_path)) {
            unlink($photo_path);
        }

        $stagiaire->delete();

        return Redirect('/index');
    }

    public function add(Request $request)
    {
         $request->validate([
             'pdf_cv'=>'required|mimes:pdf',
             'demande_de_stage' => 'required|mimes:pdf',
             'etablissement' => 'required|string',
             'pole' => 'required|string',
             'photo' => 'required|image|mimes:jpeg,png,jpg,gif',
             'nom_de_famille' => 'required|string',
             'prenom' => 'required|string',
             'email' => 'required|email|unique:stagiaires',
             'duree_de_stage' => 'required|integer|min:1|max:4', 
         ]);
    
        // $Rapport_finale_de_Stage = $this->uploadFile($request->Rapport_finale_de_Stage, 'Rapport_finale_de_Stage');
        // $semi_Rapport_de_Stage = $this->uploadFile($request->semi_Rapport_de_Stage, 'semi_Rapport_de_Stage');
        $demande_de_stage = $this->uploadFile($request->demande_de_stage, 'demande_de_stage');
        $photo = $this->uploadFile($request->photo, 'images');
        $demande_de_cv = $this->uploadFile($request->pdf_cv, 'pdf_cv');
    
        $stagiaire = new Stagiaire();
        $stagiaire->pdf_cv = $demande_de_cv;
        $stagiaire->nom_de_famille = $request->nom_de_famille;
        $stagiaire->prenom = $request->prenom;
        $stagiaire->email = $request->email;
        $stagiaire->photo = $photo;
        $stagiaire->date_debut=now();
        $stagiaire->date_de_fin_de_stage=now()->addMonths($request->duree_de_stage);
        $stagiaire->demande_de_stage = $demande_de_stage;
        $stagiaire->etablissement = $request->etablissement;
        $stagiaire->pole = $request->pole;    
        $stagiaire->validestagiaire = false;
        $stagiaire->duree_de_stage = $request->duree_de_stage;
        
        // if ($Rapport_finale_de_Stage) {
        //     $stagiaire->Rapport_finale_de_Stage = $Rapport_finale_de_Stage;
        // }
        // if ($semi_Rapport_de_Stage) {
        //     $stagiaire->semi_Rapport_de_Stage = $semi_Rapport_de_Stage;        }
    
        $stagiaire->save();
        
        return redirect('/')->with('satuts','l\'satgiaire a bien ete ajouter avec succes.');
    }
    
    private function uploadFile($file, $folder)
    {
        $filename = time() . '_' . hash_file('sha256', $file->path()) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path($folder), $filename);
        return $filename;
    }
    
    
    
    public function updatestagiaire($id)
    {
        $stagiaire = Stagiaire::find($id);

        if (!$stagiaire) {
            return Redirect('/')->with('error', 'Stagiaire not found');
        }

        return view('updatestagiaire', compact('stagiaires'));
    }
    public function edit($id)
    {
        $stagiaire = Stagiaire::findOrFail($id);
        return view('stagiaires.edit', compact('stagiaire'));
    }

    // Update the Stagiaire record
    public function updateS(Request $request, $id)
    {
        $stagiaire = Stagiaire::findOrFail($id);

        // Validation rules if needed
        // $request->validate([...]);

        // Update Stagiaire data
        $stagiaire->nom_de_famille = $request->input('nom_de_famille');
        $stagiaire->prenom = $request->input('prenom');
        // Update other fields as needed

        $stagiaire->save();

        return redirect('/stagiaires/'.$id)->with('success', 'Stagiaire updated successfully');
    }

    

   
    public function next($id)
    {
        $currentStagiaire = Stagiaire::find($id);
    
        $nextStagiaire = Stagiaire::where('created_at', '>', $currentStagiaire->created_at)->orderBy('created_at')->first();
    
        if (!$nextStagiaire) {
            $nextStagiaire = Stagiaire::orderBy('created_at')->first();
        }
    
        $previousStagiaire = Stagiaire::where('created_at', '<', $currentStagiaire->created_at)->orderBy('created_at', 'desc')->first();
    
        if (!$previousStagiaire) {
            $previousStagiaire = Stagiaire::orderBy('created_at', 'desc')->first();
        }
    
        return view('Voir', [
            'stagiaires' => $currentStagiaire,
            'previousStagiaire' => $previousStagiaire,
            'nextStagiaire' => $nextStagiaire
        ]);
    }
    public function downloadPDF()
    {
        $html = view('index')->render(); // Replace 'your.view.name' with the actual view name
        $pdf = PDF::loadHTML($html);

        return $pdf->download('stagiaires.pdf');
    }
    
    public function previous($id)
    {
        $currentStagiaire = Stagiaire::find($id);
    
        $previousStagiaire = Stagiaire::where('created_at', '<', $currentStagiaire->created_at)->orderBy('created_at', 'desc')->first();
    
        if (!$previousStagiaire) {
            $previousStagiaire = Stagiaire::orderBy('created_at', 'desc')->first();
        }
    
        $nextStagiaire = Stagiaire::where('created_at', '>', $currentStagiaire->created_at)->orderBy('created_at')->first();
    
        if (!$nextStagiaire) {
            $nextStagiaire = Stagiaire::orderBy('created_at')->first();
        }
    
        return view('Voir', [
            'stagiaires' => $currentStagiaire,
            'previousStagiaire' => $previousStagiaire,
            'nextStagiaire' => $nextStagiaire
        ]);
    }
    

    public function search(Request $request)
    {
        $nom = $request->input('query');
       
        $stagiaireAlert = Stagiaire::where('validestagiaire', 0)->get();
        $stagiaireAlertCount = $stagiaireAlert->count(); 
        $stagiaires = Stagiaire::where('nom_de_famille', 'LIKE', "%$nom%")
            ->orWhere('prenom', 'LIKE', "%$nom%")->paginate(10)
            // Add other search criteria as needed
            ;
    
        return view('index', ['stagiaires' => $stagiaires,'stagiaireAlertCount'=>$stagiaireAlertCount ,'stagiaireAlert'=> $stagiaireAlert ]);
    }
    public function searchlistdattent(Request $request)
    {
        $nom = $request->input('query');
       
        $stagiaireAlert2 = Stagiaire::where('validestagiaire', 0)->get();
        $stagiaireAlertCount2 = $stagiaireAlert2->count(); 
        $stagiaires = Stagiaire::where('nom_de_famille', 'LIKE', "%$nom%")
            ->orWhere('prenom', 'LIKE', "%$nom%")->paginate(10)
            // Add other search criteria as needed
            ;
    
        return view('listedatent', ['stagiaires' => $stagiaires,'stagiaireAlertCount2'=>$stagiaireAlertCount2 ,'stagiaireAlert2'=> $stagiaireAlert2 ]);
    }
    
        public function viewReport($id) {
            $stagiaire = Stagiaire::find($id);

            if (!$stagiaire || !$stagiaire->pdf_rapport) {
                return Redirect('/')->with('error', 'Rapport not found');
            }

            $pdfPath = public_path('pdf_reports/' . $stagiaire->pdf_rapport);

            return response()->file($pdfPath);
        }


        // In your controller method
        public function index()
            {
                $stagiaires = Stagiaire::where('validestagiaire', 1)->paginate(10); // Adjust the number as per your requirement
                $stagiaireAlert = Stagiaire::where('validestagiaire', 0)->get(); // Remove paginate here

                $stagiaireAlertCount = $stagiaireAlert->count(); // Add this line to get the count

                return view('index', [
                    'stagiaires' => $stagiaires,
                    'stagiaireAlert' => $stagiaireAlert,
                    'stagiaireAlertCount' => $stagiaireAlertCount, // Pass the count to the view
                ]);
        
        
            }

        public function addadmin(Request $request)
        {
              $request->validate([
                 'nom_de_famille' => 'required|string',
                 'prenom' => 'required|string',
                 'email' => 'required|email|unique:stagiaires',
                 'photo' => 'required|image|mimes:jpeg,png,jpg,gif',
                 'etablissement' => 'required|string',
                 'pole' => 'required|string',
                 'duree_de_stage' => 'required|integer|min:1|max:4',
                 'demande_de_stage' => 'required|mimes:pdf',
                 'pdf_cv' => 'required|mimes:pdf',
                 ]);
              
            

            $demande_de_cv = $this->uploadFile($request->pdf_cv, 'pdf_cv');
            $demande_de_stage = $this->uploadFile($request->demande_de_stage, 'demande_de_stage');
            $photo = $this->uploadFile($request->photo, 'images');
        
           
            $stagiaire = new Stagiaire();
            $stagiaire->pdf_cv = $demande_de_cv;
            $stagiaire->nom_de_famille = $request->nom_de_famille;
            $stagiaire->prenom = $request->prenom;
            $stagiaire->email = $request->email;
            $stagiaire->photo = $photo;
            $stagiaire->date_debut=now();
            $stagiaire->date_de_fin_de_stage=now()->addMonths($request->duree_de_stage);
            $stagiaire->demande_de_stage = $demande_de_stage;
            $stagiaire->etablissement = $request->etablissement;
            $stagiaire->pole = $request->pole;    
            $stagiaire->validestagiaire = true;
            $stagiaire->duree_de_stage = $request->duree_de_stage;
            $stagiaire->save();
            return redirect('/index')->with('satuts','l\'satgiaire a bien ete ajouter avec succes.');
        }
        
        
        public function viewProfile()
{
    return view('profilestagiaire');
}
public function searchProfile(Request $request)
{
    $nom_de_famille = $request->input('nom_de_famille');
    $prenom = $request->input('prenom');

    // Check if both first name and last name are provided
    if (empty($nom_de_famille) || empty($prenom)) {
        // Redirect or return an error response indicating that both fields are required
        return redirect()->back()->with('error', 'Both first name and last name are required for the search.');
    }

    $stagiaire = Stagiaire::where('nom_de_famille', 'like', '%' . $nom_de_famille . '%')
        ->where('prenom', 'like', '%' . $prenom . '%')
        ->where('validestagiaire', true)
        ->first();

    return view('profilestagiaire', ['stagiaire' => $stagiaire]);
}

// Add these methods to your StagiaireController or relevant controller
public function viewCV($id)
{
    $stagiaire = Stagiaire::findOrFail($id);
    $pdfPath = public_path('pdf_cv/' . $stagiaire->pdf_cv);

    return response()->file($pdfPath, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="CV_' . $stagiaire->id . '.pdf"',
    ]);
}

public function viewDemande($id)
{
    $stagiaire = Stagiaire::findOrFail($id);
    $pdfPath = public_path('demande_de_stage/' . $stagiaire->demande_de_stage);

    return response()->file($pdfPath, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="Demande_' . $stagiaire->id . '.pdf"',
    ]);
}
public function viewAssurance($id)
{
    $stagiaire = Stagiaire::findOrFail($id);
    $pdfPath = public_path('assurance/' . $stagiaire->assurance);

    return response()->file($pdfPath, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'inline; filename="Demande_' . $stagiaire->id . '.pdf"',
    ]);
}


public function uploadRapportDeStage(Request $request, $id)
{
    $stagiaire = Stagiaire::findOrFail($id);

    if (!$stagiaire) {
        return redirect()->back()->with('error', 'Stagiaire not found');
    }

    $request->validate([
        'rapport_de_stage' => 'required|mimes:pdf|max:2048',
    ]);

    // Handle file upload
    $this->handleFileUpload($request, $stagiaire, 'rapport_de_stage', 'pdf_reports');

    return redirect()->back()->with('success', 'Rapport de Stage uploaded successfully');
}
public function generateAttestation($id)
{
    $stagiaire = Stagiaire::find($id);

    // Check if the stagiaire exists
    if (!$stagiaire) {
        // Handle the case where the stagiaire is not found
        abort(404);
    }

    return view('attestation', compact('stagiaire'));
}

public function generateConvention($id)
{
    $stagiaire = Stagiaire::find($id);

    // Check if the stagiaire exists
    if (!$stagiaire) {
        // Handle the case where the stagiaire is not found
        abort(404);
    }

    // Add logic for generating convention

    return redirect()->back()->with('success', 'Convention generated successfully.');
}
public function generatePDF($id)
{
    // Fetch data or use existing data
    $data = [
        'stagiaire' => Stagiaire::find($id),
    ];

    $pdf = $this->generatePdfView('attestation', $data);

    return $pdf->download('attestation.pdf');
}

private function generatePdfView($view, $data)
{
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $options->set('isPhpEnabled', true);

    $dompdf = new Dompdf($options);

    $html = View::make($view, $data)->render();
    $dompdf->loadHtml($html);

    // (Optional) Set paper size
    $dompdf->setPaper('A4', 'portrait');

    // Render the HTML as PDF
    $dompdf->render();

    $output = $dompdf->output();
    $response = new Response($output);
    $response->header('Content-Type', 'application/pdf');

    return$response ;}

    public function searchByPole(Request $request)
    {
        $pole = $request->input('pole');
        
        // Perform search based on the selected pole (transvers, valorisation, observation)
        // Use the $pole variable in your query logic
    
        // Example:
        $stagiaires = Stagiaire::where('pole', $pole)->get();
    
        // Pass $stagiaires or relevant data to the view
        return view('trombino', compact('stagiaires'));
    }
    

}
 

