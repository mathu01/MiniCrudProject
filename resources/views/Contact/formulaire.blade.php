@extends('layouts.app')
@section('title')
    Contact
@endsection
@section('contenu')
<section class="py-5 bg-light">
     <div class="container">
         <div class="row justify-content-center">
             <div class="col-lg-6">
                 <div class="card shadow border-0">
                     <div class="card-body p-4">
                         <h3 class="text-center fw-bold mb-4">Contactez-nous</h3>
                         <form action="#" method="post">
                             <div class="row mb-3">
                                 <div class="col">
                                     <label class="form-label">Nom</label>
                                     <input type="text" class="form-control" placeholder="Votre nom" required>
                                 </div>
                                 <div class="col">
                                     <label class="form-label">Prénom</label>
                                     <input type="text" class="form-control" placeholder="Votre prénom" required>
                                 </div>
                             </div>
                             <div class="mb-3">
                                 <label class="form-label">Adresse email</label>
                                 <input type="email" class="form-control" placeholder="exemple@email.com" required>
                             </div>
                             <div class="mb-3">
                                 <label class="form-label">Téléphone</label>
                                 <div class="input-group">
                                     <select class="form-select" style="max-width: 120px;" required>
                                         <option value="+229">🇧🇯 +229</option>
                                         <option value="+225">🇨🇮 +225</option>
                                         <option value="+221">🇸🇳 +221</option>
                                         <option value="+33">🇫🇷 +33</option>
                                         <option value="+1">🇺🇸 +1</option>
                                     </select>
                                     <input type="tel" class="form-control" placeholder="Numéro de téléphone" required>
                                 </div>
                             </div>
                             <div class="mb-3">
                                 <label class="form-label">Message</label>
                                 <textarea class="form-control" rows="4" placeholder="Votre message..."></textarea>
                             </div>
                             <div class="d-grid">
                                 <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
@endsection