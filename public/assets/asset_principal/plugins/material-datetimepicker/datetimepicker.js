$(document).ready(function()
		{
			/**
			 * utiliser pour selectionner le debut et la fin de
			 * l'année scolaire
			 */
			$('#debut_annee').bootstrapMaterialDatePicker
			({
				time: false,
				date: true,
				format: 'YYYY',
				cancelText: 'ANNULER'
			});
			$('#fin_annee').bootstrapMaterialDatePicker
			({
				time: false,
				date: true,
				format: 'YYYY',
				cancelText: 'ANNULER'
			});
			/**
			 * utiliser pour selectionner la date de naissance de l'élève
			 */
			$('#date_naissance').bootstrapMaterialDatePicker
			({
				time: false,
				date: true,
				cancelText: 'ANNULER'
			});
			/**
			 * utiliser pour la date d'inscription de l'élève
			 */
			$('#date_inscription').bootstrapMaterialDatePicker
			({
				time: false,
				date: true,
				cancelText: 'ANNULER'
			});
			/**
			/**
			 * utiliser pour la création de l'emplois du temps
			 */
			$('#heure_debut1').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			$('#heure_fin1').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			$('#heure_debut2').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			$('#heure_fin2').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			$('#heure_debut3').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			$('#heure_fin3').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			$('#heure_debut4').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			$('#heure_fin4').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			$('#heure_debut5').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			$('#heure_fin5').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			$('#heure_debut6').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			$('#heure_fin6').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			$('#heure_debut7').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			$('#heure_fin7').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			$('#heure_debut8').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			$('#heure_fin8').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			/** fin */

			$('#date').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true
			});
			$('#date1').bootstrapMaterialDatePicker
			({
				time: false,
				date:true,
				clearButton: true
			});
			$('#dateOfBirth').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true
			});

			$('#therapyDate').bootstrapMaterialDatePicker
			({
				time: false,
				clearButton: true
			});
			
			$('#time').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});
			$('#time2').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});

			$('#date-format').bootstrapMaterialDatePicker
			({
				format: 'dddd DD MMMM YYYY - HH:mm'
			});
			$('#date-fr').bootstrapMaterialDatePicker
			({
				format: 'DD/MM/YYYY HH:mm',
				lang: 'fr',
				weekStart: 1, 
				cancelText : 'ANNULER',
				nowButton : true,
				switchOnClick : true
			});
			$('#date-naiss').bootstrapMaterialDatePicker
			({
				format: 'DD/MM/YYYY',
				lang: 'fr',
				weekStart: 1,
				time:false, 
				cancelText : 'ANNULER',
				nowButton : true,
				switchOnClick : true
			});

			$('#date-end').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm'
			});
			$('#date-start').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm', shortTime : true
			}).on('change', function(e, date)
			{
				$('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
			});

			$('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });

			
		});