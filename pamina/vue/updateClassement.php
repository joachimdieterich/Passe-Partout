<div id="defiForm">
	<form enctype="multipart/form-data" method="post" action="../model/updateDefi/updateDefiClassement.php">
		<input type="hidden" name="idClassement" id="idClassement">
		<div id="edMap">
			<select style="visibility: hidden;" name="ed" class="form-control"  required>
				<option disabled selected value></option>
				<option value="ED1">ED 1</option>
				<option value="ED2">ED 2</option>
				<option value="ED3">ED 3</option>
				<option value="ED4">ED 4</option>
			</select>
		</div>
		<div class="form-group">
			<label>Eurodistrict :</label>
		</div>
		<div style="position: relative;">
			<div class="map">
				<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="116.27px" height="167.857px" viewBox="0 0 116.27 167.857" enable-background="new 0 0 116.27 167.857"
				xml:space="preserve">
				<path fill="#BDD245" stroke="#A74D96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M93.238,27.119
				c-0.98-1.946-2.62-0.604-2.62-0.604l-0.491-3.894c0,0-2.348-0.314-3.146-1.563c-0.802-1.25-2.005-0.202-2.005-0.202
				s-6.188-0.611-8.483-3.074l-3.337,3.092l0.014-0.118c-1.238-1.97-3.56-3.404-3.56-3.404s-1.716,0.646-3.281,0.87
				c-1.567,0.218-1.243-0.367-1.243-0.367s-4.716-0.597-6.185-0.541c-1.464,0.054-1.937-1.116-1.937-1.116s-3.665,2.068-6.388,5.1
				c-2.725,3.031-4.351,8.516-4.351,8.516c-4.103,0.806-2.782,3.497-2.271,4.715l-3.116,7.296c0,0-2.646-1.243-3.775-1.537
				s-3.922,0.916-4.737,1.31c-0.815,0.396-1.194-0.765-1.623-1.31c-0.432-0.545-6.649-1.603-6.649-1.603l-1.475-4.229l-0.976,0.356
				c0,0-0.254,3.831-1.64,6.167c-1.387,2.336-2.83,3.062-2.83,3.062s0.75,1.777,3.013,2.272c2.265,0.494,1.55,2.945,1.605,3.937
				c0.057,0.988,1.301,1.37,1.301,1.37s1.801-3.122,3.263-3.358c1.46-0.233,5.581,3.854,5.581,3.854
				c-0.219,1.751-2.148,4.92-2.148,4.92s1.001,1.693,2.697,2.268c1.697,0.575,7.737-0.22,7.309-1.59c0,0,0.91,0.632,1.738,2.187
				c0.307,0.573,1.447,2.379,2.638,2.688c0.947,0.247,1.457-0.515,2.273-1.344c0.3-0.303,1.605-0.983,1.605-1.708
				c0-0.438-0.984-0.775-0.984-0.775l0.362-2.999c0.622-0.312,3.322-0.388,3.31,0.467c-0.012,0.852,5.408-0.165,5.408-0.165l1.96-2.671
				l0.016-0.081l1.332,1.912c1.695,0.82,9.894,2.875,9.894,2.875s1.111,0.721,0.399,1.501c0,0,2.357,2.166,5.856-1.537
				c3.502-3.703,2.896-8.744,2.896-8.744L76.5,50.574c0,0,1.553-2.651-1.42-3.487l-0.324-1.767l4.202,0.484
				c0,0,1.548-9.889,2.354-10.046c0.811-0.153,5.273-0.475,5.976-0.879c0.698-0.4-0.383-2.862,1.276-3.057
				c1.661-0.193,1.873,0.202,1.873,0.202S94.223,29.065,93.238,27.119z"/>
				<path fill="#72BB6F" stroke="#A74D96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M81.394,104.133
				c0,0-1.103,0.62-2.139,0.968c-1.034,0.345-2.688,0.345-4.067-0.07c-1.38-0.414-2.416,1.794-2.553,3.382
				c-0.139,1.586,0.551,2.413-0.206,2.688c-0.76,0.275-0.691,0-1.104-0.689c-0.414-0.688-3.034-0.896-4.207-3.38
				c-1.175-2.483-1.863-0.483-2.277-0.965c-0.089-0.104-0.214-0.216-0.376-0.331c-0.599-0.428-1.703-0.9-3.278-1.119
				c-2-0.274-1.932,0.484-3.516,3.312c-1.586,2.828-4.62,2.828-6.897,4.002c-2.273,1.174-1.586-0.069-3.103,0.138
				c-1.52,0.208-1.52,3.38-2.552,4.415c-1.035,1.034-6.485,1.793-7.521,2.274c-0.226,0.105-0.423,0.179-0.597,0.203
				c-0.623,0.096-0.957-0.409-1.334-2.134c-0.482-2.209-1.793,1.309-2.966,1.034c-1.175-0.276-0.896-5.243-0.483-7.656
				c0.156-0.907-2.137-1.793-3.311-2.346c-1.175-0.552-2.208-2.414-3.589-3.035c-1.379-0.621-3.239-4.691-3.033-5.864
				c0.208-1.172,3.726-4.827,3.174-6.965s1.517-7.52,3.311-10.279c1.793-2.759-0.481-2.345,0-3.725c0.483-1.38,3.655-4.139,4.276-5.104
				c0.622-0.967,3.726-0.826,4.967-1.104c1.242-0.275,4.277-0.827,5.104-0.413c0.827,0.413,0.689,0.345,1.24-0.482
				c0.554-0.827,0.896-2.206,1.312-2.966l0.207-0.442c0.172,0.689,0.312,1.288,0.232,1.518c0,0,1.089,0.104,1.761-0.414
				c0.672-0.517,1.239-0.672,1.292,0.312c0.052,0.98,0.465,1.654,1.861,2.226c1.396,0.569,0.671,0.465,0.671,0.465
				s-0.931,1.5-0.618,3.154c0.31,1.657,0.981,3.208,0.153,3.932c-0.828,0.726-1.499,1.189-1.653,2.328c-0.155,1.139,0,1.655,0,1.655
				s3.259,0.621,4.188,1.086c0.932,0.465,2.068-0.569,3.981,0.362c1.913,0.931,3.67,1.292,4.136,0.825
				c0.465-0.465,0.155-2.531,2.378-1.396c2.223,1.138,4.242-0.207,4.5-0.31c0.259-0.104,0.961,1.67,0.703,2.289
				c-1.173-0.619-1.234,0.608-1.45,1.861c-0.216,1.255,0,1.934,1.104,3.657c1.103,1.725-0.62,0.688-1.45,1.173
				c-0.827,0.481,0,2.552,0.068,3.172s1.655,1.312,2.621,1.448c2.789,0.396,5.52-0.482,5.727,0.207
				c0.206,0.688-1.861,2.276-1.448,2.622c0.414,0.344,1.034-0.276,3.104,0.62C79.808,101.167,81.394,104.133,81.394,104.133z"/>
				<path fill="#BDD245" stroke="#A74D96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M88.487,115.28
				c-2.056-0.444-2.098,1.099-3.833,1.386c-2.145,0.356-4.959-2.14-2.924-4.141c1.46-1.438,0.752-2.936,2.982-3.863
				c0.311-2.116-1.058-3.101-2.465-4.087c-1.511-1.055-4.518,0.399-6.954,0.098c-2.522-0.317-2.537,2.442-2.724,4.015
				c-0.673,5.578-5.57-5.499-8.354-2.545c0.691-1.162-4.381-2.269-5.609,0.038c-1.604,3.009-5.564,6.294-9.312,6.26
				c-4.023-0.035-1.791,3.08-4.866,4.469c-2.194,0.99-4.733,0.924-6.916,1.885c-1.903-0.49-1.362-0.755-1.84-2.213
				c-0.76-2.314-2.002,0.883-2.375,1.062c-1.689,0.812-0.745-6.16-0.745-6.906c0-2.521-3.579-3.209-4.684-4.929
				c-1.711-2.678-5.487-2.886-5.487-7.146c-4.572,2.125-0.77,11.812-6.044,11.861c0.841,3.783,6.688,2.672,8.178,5.883
				c1.582,3.413-1.458,5.399-0.018,8.297c2.854-0.646,2.986-0.217,4.704,2.302c2.553,3.746-1.988,2.97-3.9,2.826
				c-2.531-0.188-0.541,2.604-1.598,3.877c-1.139,1.371-3.917,3.566-3.479,5.609c2.236,0.512,4.614-2.257,6.615-0.621
				c1.599,1.305-1.837,3.58-2.985,3.94c-0.496,0.156-1.759,4.285-2.456,5.266c-1.151,1.621-1.926,4.062,1.26,3.124
				c2.51-0.741,4.615-2.537,5.818-4.837c1.042-1.991,2.373-0.43,3.163-2.421c0.705-1.778,13.652-3.979,16.227-4.152
				c-0.381,2.576-12.571,7.159-5.842,10.103c0.081,0.035,5.226-2.545,3.505,0.103c-0.614,0.946-3.062,2.525-4.227,2.6
				c-0.186,1.827,2.153,1.768,3.254,2.535c0.886,0.62,1.593-2.253,2.139-2.763c1.976-1.846,0.839-2.354,4.03-2.508
				c1.737-0.084,2.696-0.85,1.772-2.512c-1.079-1.939-4.856-5.417-0.398-5.533c3.562-0.098,6.493,2.076,10.009,1.954
				c2.015-0.071,1.896-1.402,3.129-2.153c0.906-0.202,1.554,0.132,1.938,1.001c1.223,1.2,2.218,0.315,3.626,0.167
				c1.043-0.112,4.387,1.516,4.808-0.17c0.438-1.747,2.446-3.983,3.166-0.646c0.521,2.399,5.801,9.668,4.533,3.768
				c-0.914-4.27,0.339-5.363,1.02-8.916c-3.666-0.833-5.127-9.87-2.312-13.042c1.366-1.541,1.165-3.797,2.189-4.613
				c2.651-2.116,2.729,1.042,4.188,0.475C89.487,119.031,89.823,115.571,88.487,115.28C88.084,115.193,89.67,115.538,88.487,115.28z"/>
				<path fill="#95CCAC" stroke="#A74D96" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M74.139,78.718
				c1.751-0.167,0.252-3.332-0.465-3.773c-1.965-1.22-3.104-1.977-2.053-4.339c1.485-3.352-5.356-7.674-1.879-10.869
				c1.753-1.315-3.344-2.373-3.521-2.419c-2.81-0.746-6.979-1.02-8.265-4.062c-0.879,0.141-1.146,2.294-1.938,2.801
				c-0.839,0.53-2.94,0.449-3.83,0.49c-2.982,0.143-4.641-2.846-5.193,1.737c-0.141,1.155,2.021,0.788,0.234,2.257
				c-1.13,0.931-1.216,0.753-2.756,1.063c-1.892,0.381-3.668-2.215-3.726-4.074c-2.514-0.042-4.776,1.266-7.276,1.067
				c-3.448-0.284-1.979,5.027-4.099,6.858c-0.531,0.46-0.986,0.908-1.491,1.354c-1.055,0.939-1.613-0.991-2.521-0.104
				c-0.488,0.479-1.734-0.566-1.75,0.439c-0.021,1.521,1.741,0.396,2.441,1.099c0.766,0.766-1.734,0.269-1.866,0.532
				c0.033-0.065,1.191,3.729,0.912,4.788c-0.617,2.286,0.3,2.849-0.53,4.638c2.142,0.097,3.465,1.785,4.995-0.788
				c2.07-3.479,4.438-4.202,7.962-5.512c2.27-0.84,6.058,0.517,7.188-1.485c1-1.77,1.821-0.812,3.156-1.839
				c0.897-0.69,2.811,2.119,3.948,2.909c-0.415-0.288-0.771,3.099-0.742,3.246c0.686,3.664-1.084,3.204-1.5,6.259
				c-0.381,2.808,9.118,4.017,11.451,4.129c1.927,0.093,0.699-2.891,3.232-1.595c1.215,0.622,6.6-1.378,5.203,1.979
				c-0.371,0.886,4.072,0.782,4.688,0.139C75.635,84.098,72.32,78.892,74.139,78.718C75.225,78.615,73.054,78.821,74.139,78.718z"/>
				</svg>
			</div>
			<div style="position: absolute;top: 30px;left: 150px;">
				<p>1. PAMINA</p>
				<p>2. Strasbourg Ortenau</p>
				<p>3. Freibourg Centre Sud Alsace</p>
				<p>4. Bâle Trinational</p>
			</div>
		</div>
		<div style="margin-bottom: 50px;">
			<small><strong><?php echo $translation['choisissez_eurodistrict'][$lang]; ?></strong></small>
		</div>

	<div class="form-group">
		<label><?php echo $translation['langue_defi'][$lang]; ?> :</label>
		<select id="langueDef" name="langueDef" class="form-control" required>
			<option disabled selected value></option>
			<option value="FR">FR</option>
			<option value="DE">DE</option>
			<option value="mixte"><?php echo $translation['mixte'][$lang]; ?></option>
			<!-- <option value="multi">multi</option> -->
		</select>
	</div>
		<div class="form-group">
			<label><?php echo $translation['region'][$lang]; ?> :</label>
			<select id="couleur" name="color" class="form-control" required>
				<option disabled selected value></option>
				<option data-ed="1" value="bleu/fenetrenordals">Nord Alsace</option>
				<option data-ed="1" value="vert/fenetremittlerer">Mittlerer Oberrhein</option>
				<option data-ed="1" value="violet/fenetresudpfalz">Südpfalz</option>
			</select>
		</div>
		<div id="LieuList">
			<!-- <div class='form-group'><label>Lieu :</label><select name='lieu' class='form-control' required><option disabled selected value></option></select></div> -->
		</div>

<!-- 		<div class="form-group">
			<label>Difficulté du défi :</label>
			<select id="niveau" name="level" class="form-control" required>
				<option disabled selected value></option>
				<option value="1">Niveau 1</option>
				<option value="2">Niveau 2</option>
				<option value="3">Niveau 3</option>
			</select>
		</div> -->

		<div class="form-group">

			<label><?php echo $translation['categorie_defi'][$lang]; ?> :</label>
			<!-- Categorie -->
			<select id="category" name="category" class="form-control" required>
			    <option disabled selected value></option>
			    <option value="c1" rel="cat1"><?php echo $thesaurus['cat1'][$lang]; ?></option>
			    <option value="c2" rel="cat2"><?php echo $thesaurus['cat2'][$lang]; ?></option>
			    <option value="c3" rel="cat3"><?php echo $thesaurus['cat3'][$lang]; ?></option>
			    <option value="c4" rel="cat4"><?php echo $thesaurus['cat4'][$lang]; ?></option>
			</select>
			
			<select name="res" class="cascade form-control" id="res"></select>

			<!-- Items -->
			<select name="items" class="cascade form-control">
				<option value="c1i1" class="cat1"><?php echo $thesaurus['cat1item1'][$lang]; ?></option>
				<option value="c1i2" class="cat1"><?php echo $thesaurus['cat1item2'][$lang]; ?></option>
				<option value="c1i3" class="cat1"><?php echo $thesaurus['cat1item3'][$lang]; ?></option>
			</select>

			<select name="items" class="cascade form-control">
				<option value="c2i1" class="cat2"><?php echo $thesaurus['cat2item1'][$lang]; ?></option>
				<option value="c2i2" class="cat2"><?php echo $thesaurus['cat2item2'][$lang]; ?></option>
				<option value="c2i3" class="cat2"><?php echo $thesaurus['cat2item3'][$lang]; ?></option>
				<option value="c2i4" class="cat2"><?php echo $thesaurus['cat2item4'][$lang]; ?></option>
			</select>

			<select name="items" class="cascade form-control">
				<option value="c3i1" class="cat3"><?php echo $thesaurus['cat3item1'][$lang]; ?></option>
				<option value="c3i2" class="cat3"><?php echo $thesaurus['cat3item2'][$lang]; ?></option>
				<option value="c3i3" class="cat3"><?php echo $thesaurus['cat3item3'][$lang]; ?></option>
				<option value="c3i4" class="cat3"><?php echo $thesaurus['cat3item4'][$lang]; ?></option>
			</select>
					
		</div>


		<!-- Classement -->
		<div id="classement">
			<div class="form-group">
				<label><?php echo $translation['titre_question'][$lang]; ?> :</label>
				<input type="text" id="titreQuestionClassement" class="form-control" name="titleQuestClassement" required>
			</div>
			<div class="form-group">
				<label><?php echo $translation['question'][$lang]; ?> :</label>
				<input type="text" id="questionClassement" class="form-control" name="questionClassement" required>
			</div>
			<div class="form-group">
				<label><?php echo $translation['nombre_de_categorie'][$lang]; ?> :</label>
				<select id="nbCatClassement" class="form-control" name="nbCatClassement" required>
					<option disabled selected value></option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
			</div>
			<div id="catNamesClassement"></div>
			<div class="form-group">
				<label><?php echo $translation['type_etiquette2'][$lang]; ?> :</label>
				<select id="typeEtiqClassement" class="form-control" name="typeEtiqClassement" required>
					<option disabled selected value></option>
					<option value="1"><?php echo $translation['mot'][$lang]; ?></option>
					<option value="2"><?php echo $translation['groupe_de_mots'][$lang]; ?></option>
					<option value="3"><?php echo $translation['image'][$lang]; ?></option>
				</select>
			</div>
			<div id="etiquettesClassement"></div>
			<div class="page-header">
				<h2><?php echo $translation['aide_au_defi'][$lang]; ?></h2>
				<label for="aideTxt"><?php echo $translation['texte_aide_defi2'][$lang]; ?> : </label><br/>
				<!-- <textarea rows="6" cols="50" name="aideTxt"></textarea> -->
				<textarea id="editorClassement" class="editor" rows="6" cols="50" name="editorClassement">Texte seulement ! Voir les champs ci dessous pour les images/vidéos/audios</textarea><br/><br/>
				<div class="input-group">
					<span class="input-group-addon"><?php echo $translation['adresse_ou_nom_exacte_du_lieu'][$lang]; ?> : </span>
					<input id="aideMap" type="text" class="form-control" name="aideMap">
				</div>
				<small id="mapHelp" class="form-text text-muted"><?php echo $translation['pas_de_carte'][$lang]; ?></small><br><br>
				<label><?php echo $translation['image_aide_defi2'][$lang]; ?> :</label>
				<input type="file" id="aideImgClassement" name="aideImgClassement" accept="image/*"><br/>
				<input type="text" id="aideImgOld" name="aideImgOld" style="display: none;">

				<!-- aperçu de l'ancienne image -->
				<div class="form-group">
					<label style="color: #009688;">Image actuelle : </label>
				</div>
				<img class="img-responsive img-thumbnail img-preview" id="imgHelpShowOld" src="">

				<div class="input-group">
					<span class="input-group-addon"><?php echo $translation['prop_image_aide_defi2'][$lang]; ?> : </span>
					<input id="aideImgAuteur" type="text" class="form-control" name="aideImgAuteur">
				</div><br/>
				<div class="form-group">
					<label>Copyright :</label>
					<select id="copyrightImg" name="copyrightImg" class="form-control">
						<option disabled="" selected="" value=""></option>
						<option value="cr1">CC 0 - public domain</option>
						<option value="cr2">CC BY</option>
						<option value="cr3">CC BY SA</option>
						<option value="cr4">CC BY SA ND</option>
						<option value="cr5">CC BY SA NC</option>
					</select>
				</div><br/>
				<label><?php echo $translation['video_aide_defi2'][$lang]; ?> :</label>
				<input type="file" id="aideVideoClassement" name="aideVideoClassement" accept="video/mp4,video/*"><br/>
				<input type="text" id="aideVideoOld" name="aideVideoOld" style="display: none;">
				<div class="input-group">
					<span class="input-group-addon"><?php echo $translation['prop_video_aide_defi2'][$lang]; ?> : </span>
					<input id="aideVideoAuteur" type="text" class="form-control" name="aideVideoAuteur">
				</div><br/>
				<div class="form-group">
					<label>Copyright :</label>
					<select id="copyrightVideo" name="copyrightVideo" class="form-control">
						<option disabled="" selected="" value=""></option>
						<option value="cr1">CC 0 - public domain</option>
						<option value="cr2">CC BY</option>
						<option value="cr3">CC BY SA</option>
						<option value="cr4">CC BY SA ND</option>
						<option value="cr5">CC BY SA NC</option>
					</select>
				</div><br/>
				<label><?php echo $translation['audio_aide_defi2'][$lang]; ?> :</label>
				<input type="file" id="aideSonClassement" name="aideSonClassement" accept="audio/*"><br/>
				<input type="text" id="aideSonOld" name="aideSonOld" style="display: none;">
				<div class="input-group">
					<span class="input-group-addon"><?php echo $translation['prop_audio_defi2'][$lang]; ?> : </span>
					<input id="aideSonAuteur" type="text" class="form-control" name="aideSonAuteur">
				</div><br/>
				<div class="form-group">
					<label>Copyright :</label>
					<select id="copyrightSon" name="copyrightSon" class="form-control">
						<option disabled="" selected="" value=""></option>
						<option value="cr1">CC 0 - public domain</option>
						<option value="cr2">CC BY</option>
						<option value="cr3">CC BY SA</option>
						<option value="cr4">CC BY SA ND</option>
						<option value="cr5">CC BY SA NC</option>
					</select>
				</div>
			</div>
		</div>
		<!-- fin Classement -->

    

		<!-- AUTRES -->
		<?php if (isset($_SESSION['error'])) {
			echo '<div class="row"><div class="alert alert-danger" role="alert"><strong>Erreur! </strong>'.$_SESSION['error'].'</div></div>';
		} ?>
		<div class="row">
			<div class="col-md-12">
				<input type="checkbox" name="" id="propIntellec" required>
				<label for="propIntellec"><?php echo $translation['droit_prop_intellect'][$lang]; ?></label>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<input type="checkbox" name="" id="rightImg" required>
				<label for="rightImg"><?php echo $translation['droit_image'][$lang]; ?></label>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12 text-center">
				<a onclick="window.location.reload(true);">
					<button type="button" class="btn btn-primary"><?php echo $translation['annuler'][$lang]; ?></button>
				</a>
				<button id="btnPreview" type="button" class="btn btn-primary"><?php echo $translation['previsualisation'][$lang]; ?></button>
				<button type="submit" class="btn btn-primary"><?php echo $translation['valider'][$lang]; ?></button>
			</div>
		</div>
	</form>
</div>
