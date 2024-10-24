<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CommApis">
    <meta name="author" content="AMOSAG-Consulting">
	<meta name="keywords">

    <!-- PWA  -->
    <meta name="theme-color" content="#33221A"/>
    <link rel="apple-touch-icon" href="/systemeApi/public/assets/img/logo/CommApisicon.png">
    
    <link rel="shortcut icon" href="/systemeApi/public/assets/img/logo/CommApisicon.png"/>

	<title>CommApis Connexion</title>

    <link href="/systemeApi/public/assets/css/commcss.css" rel="stylesheet">
    <link href="/systemeApi/public/assets/css/commapi.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<!-- inclusion du fichier contenant le body -->
<body oncopy="return false;" oncut="return false;" onpaste="return false;" >

                        

		<main class="d-flex w-100 mb-5">
			<div class="container d-flex flex-column">
                
				<div class="row vh-100">
					<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
						<div class="d-table-cell align-middle">

							
								<div class="text-center mt-2">
									<h1 class="h2">Connectez-vous à votre compte CommApis</h1>
								</div>

								<div class="card br-api-2 bg-api-marronfoncee">
									<div class="card-body">
										<div class="m-sm-4">
											<!--div class="nav nav-tabs mb-3 gap-3" id="nav-tab" role="tablist">
												<button class="nav-link fw-semi-bold active" id="nav-email-tab" data-bs-toggle="tab"
													data-bs-target="#nav-email" type="button" role="tab" aria-controls="nav-email"
													aria-selected="true">Email</button>
											
												<button class="nav-link fw-semi-bold" id="nav-telephone-tab" data-bs-toggle="tab"
														data-bs-target="#nav-telephone" type="button" role="tab" aria-controls="nav-telephone"
														aria-selected="true">Téléphone</button>
											
											</div-->

											<form action="{{route('procedure-de-base.connexion.session')}}" method="POST" class="mt-4">
												@csrf
											
												<!--div class="tab-content mb-3" id="nav-tabContent"-->
													<!--div class="tab-pane fade show active" id="nav-email" role="tabpanel" aria-labelledby="nav-email-tab"-->
														<div class="d-flex flex-column">
															<label class="d-flex text-api-blanc">Adresse mail <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
															<input class="form-control form-control-lg br-api-1 bdr-api-all-marronfoncee bx-shadow-api-marronfoncee" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="entrer votre adresse mail" minlength="7" maxlength="155">
															@error('email')
																<div class="text-api-jaune">{{ $message }}</div>
															@enderror
														</div>
													<!--/div-->
							
													<!--div class="tab-pane fade" id="nav-telephone" role="tabpanel" aria-labelledby="nav-telephone-tab">

														<div class="d-flex flex-column gap-2">
															<label class="d-flex text-api-blanc">Numéros de téléphone<strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
																
															<div class="d-flex gap-2">
																<select class="form-control form-control-lg br-api-1 bdr-api-all-marronfoncee bx-shadow-api-marronfoncee" name="indicatif_pays" id="indicatif_pays">
																	<option value="" selected>+ xxx</option>
																</select>
																<input class="form-control form-control-lg br-api-1 bdr-api-all-marronfoncee bx-shadow-api-marronfoncee" type="number" id="numeros_contact" name="numeros_contact" placeholder="Téléphone">
															</div>
																	
															@error('indicatif_pays')
																<div class="text-api-jaune">{{ $message }}</div>
															@enderror
															@error('numeros_contact')
																<div class="text-api-jaune">{{ $message }}</div>
															@enderror
														</div>
													
													</div-->
												<!--/div-->
												

												<div class="mb-3 mt-3">
													<label class="d-flex text-api-blanc">Mot de passe <strong class="px-1" style="color: #fdb913; font-size:1.3em;">*</strong></label>
													<input class="form-control form-control-lg br-api-1 bdr-api-all-marronfoncee bx-shadow-api-marronfoncee" type="password" name="password" id="password" minlength="7" maxlength="35" required>
													@error('password')
														<div class="text-api-jaune">{{ $message }}</div>
													@enderror
												</div>
														


												<div class="text-center mt-4">
													<button type="submit" class="br-api-1 bdr-api-all-marronfoncee bg-api-marronclaire text-api-blanc p-2 px-3"><i class="align-middle me-2" data-feather="edit-2"></i> Connexion!</button>
												</div>
											</form>

											<div class="text-center d-flex justify-content-end mt-4 gap-3">
												<span class="text-api-blanc">Je n'ai pas de compte!</span>
												<a class="bg-api-jaune text-api-marronfoncee br-api-1 p-2" href="{{route('procedure-de-base.inscription')}}">Inscription</a>
											</div>
										</div>
									</div>
								</div>

						</div>
					</div>
				</div>
			</div>
		</main>


        
        

	@include('inclusionsTotals.footer')
	  
	<!-- inclusion des fichiers contenant les js -->
    <script src="/systemeApi/public/assets/js/commjs.js"></script>
	
	
	@include('communication.inclusions.infos_pays')

</body>

</html>