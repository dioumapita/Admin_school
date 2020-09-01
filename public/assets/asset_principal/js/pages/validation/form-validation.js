/**
 *  Document   : form-validation.js
 *  Author     : Elhadj Mamadou Diouma Barry
 *  Description: fichier permettant de gerer la validation 
 *
 **/
var FormValidation = function () {

    // basic validation
    var handleValidation1 = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var form1 = $('#form_sample_1');
            var error1 = $('.alert-danger', form1);
            var success1 = $('.alert-success', form1);

            form1.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                messages: {
                    select_multi: {
                        maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
                        minlength: jQuery.validator.format("At least {0} items must be selected")
                    },
                    nom: {
                        required: "Veuillez saisir le nom de l'élève",
                        minlength: "Le nom doit contenir au minimum 2 caractères"
                    },
                    prenom: {
                        required: "Veuillez saisir le prénom de l'èlève",
                        minlength: "Le prénom doit contenir au minimum 4 caractères"
                    },
                    sexe: {
                        required: "Veuillez selectionner le genre"
                    },
                    date_naissance: {
                        required: "Veuillez ajouter la date de naissance de l'élève",
                        date: "La date de naissance est invalide"
                    },
                    telephone: {
                        number: "Le numéro de téléphone ne doit contenir que des nombres de (0 à 9)",
                        minlength: "Le numéro de téléphone doit contenir (9 chiffres)",
                        maxlength: "Le numéro de téléphone est invalide maximum (9 chiffres)"
                    },
                    email:{
                        email: "L'adresse e-mail est invalide"
                    },
                    nom_parent:{
                        required: "Veuillez saisir le nom du parent ou tuteur",
                        minlength: "Le nom doit contenir au minimum 2 caractères"
                    },
                    prenom_parent:{
                        required: "Veuillez saisir le prénom du parent ou tuteur",
                        minlength: "Le prénom doit contenir au minimum 4 caractères"
                    },
                    profession:{
                        required: "Veuillez saisir la profession du parent ou tuteur"
                    },
                    telephone_parent:{
                        required: "Veuillez saisir le numéro de téléphone du parent ou tuteur",
                        number: "Le numéro de téléphone ne doit contenir que des nombres de (0 à 9)",
                        minlength: "Le numéro de téléphone doit contenir (9 chiffres)",
                        maxlength: "Le numéro de téléphone est invalide maximum (9 chiffres)"
                    },
                    email_parent:{
                        email: "L'adresse e-mail est invalide"
                    },
                    quartier:{
                        required: "Veuillez saisir une adresse (Quartier)"
                    },
                    date_inscription:{
                        required: "Veuillez ajouter la date d'inscription",
                        date: "La date d'inscription est invalide"
                    },
                    /**
                     * utiliser pour afficher les messages d'erreurs de validation du 
                     * changement de mot de passe de l'utilisateur
                     */
                    new_password:{
                        required: "Veuillez saisir votre nouveau mot de passe",
                        minlength: "Le nouveau mot de passe doit contenir au minimum 8 caractères"
                    },
                    confirm_new_password:{
                        required: "Veuillez confirmez votre nouveau mot de passe",
                        equalTo: "S'il vous plaît entrez à nouveau la même valeur que le nouveau mot de passe"
                    },
                    /**
                     * utiliser pour afficher les messages d'erreurs de validation
                     * l'annee scolaire
                     */
                    debut_annee:{
                        required: "Veuillez ajouter le début de l'année scolaire (example: 2020)",
                        date: "Le début de l'année scolaire doit être au format année (example: 2020)"
                    },
                    fin_annee:{
                        required: "Veuillez ajouter la fin de l'année scolaire (example: 2021)",
                        date: "La fin de l'année scolaire doit être au format année (example: 2021)"
                    }
                },
                rules: {
                    name: {
                        minlength: 2,
                        required: true
                    },
                    sexe: {
                        required: true
                    },
                    date_naissance: {
                        required: true,
                        date: true
                    },
                    classe: {
                        required: true,
                    },
                    telephone: {
                        required: false,
                        number: true,
                        minlength: 9,
                        maxlength: 9
                    },
                    email: {
                        required: false,
                        email: true
                    },
                    nom_parent: {
                        required: true,
                        minlength: 2,
                    },
                    prenom_parent: {
                        required: true,
                        minlength: 4
                    },
                    profession: {
                        required: true
                    },
                    telephone_parent: {
                        required: true,
                        number: true,
                        minlength: 9,
                        maxlength: 9
                    },
                    email_parent: {
                        required: false,
                        email: true
                    },
                    quartier: {
                        required: true
                    },
                    date_inscription: {
                        required: true,
                        date: true
                    },
                    /**
                     * utiliser pour le changement de mot de passe
                     * de l'utilisateur
                     */
                    new_password: {
                        required: true,
                        minlength: 8
                    },
                    confirm_new_password:{
                        required: true,
                        equalTo: "#new_password"
                    },
                    /**
                     * utiliser pour la validation de l'annee scolaire
                     */
                    debut_annee: {
                        required: true,
                        date:true
                    },
                    fin_annee: {
                        required: true,
                        date:true
                    }

                },

                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success1.hide();
                    error1.show();
                    App.scrollTo(error1, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var cont = $(element).parent('.input-group');
                    if (cont) {
                        cont.after(error);
                    } else {
                        element.after(error);
                    }
                },

                highlight: function (element) { // hightlight error inputs
                	$(element).closest('.form-group').removeClass('has-success').addClass('has-error'); // set error class to the control group
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set error class to the control group
                },
                
                success: function (label) {
                    label.closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                },

                submitHandler: function (form) {
                    success1.show();
                    error1.hide();
                    form[0].submit(); // submit the form
                    
                }
            });


    }

    // validation using icons
    var handleValidation2 = function() {
        // for more info visit the official plugin documentation: 
            // http://docs.jquery.com/Plugins/Validation

            var form2 = $('#form_sample_2');
            var error2 = $('.alert-danger', form2);
            var success2 = $('.alert-success', form2);

            form2.validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', // default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "",  // validate all fields including form hidden input
                rules: {
                    name: {
                        minlength: 2,
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    url: {
                        required: true,
                        url: true
                    },
                    number: {
                        required: true,
                        number: true
                    },
                    creditcard: {
                        required: true,
                        creditcard: true
                    },
                },
                
                invalidHandler: function (event, validator) { //display error alert on form submit              
                    success2.hide();
                    error2.show();
                    App.scrollTo(error2, -200);
                },

                errorPlacement: function (error, element) { // render error placement for each input type
                    var icon = $(element).parent('.input-icon').children('i');
                    icon.removeClass('fa-check').addClass("fa-warning");  
                    icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                        .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
                },

                unhighlight: function (element) { // revert the change done by hightlight
                    
                },

                success: function (label, element) {
                    var icon = $(element).parent('.input-icon').children('i');
                    $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                    icon.removeClass("fa-warning").addClass("fa-check");
                },

                submitHandler: function (form) {
                    success2.show();
                    error2.hide();
                    form[0].submit(); // submit the form
                }
            });


    }

    

    return {
        //main function to initiate the module
        init: function () {

            handleValidation1();
            handleValidation2();

        }

    };

}();

jQuery(document).ready(function() {
	'use strict';
    FormValidation.init();
});