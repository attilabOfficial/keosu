/************************************************************************
 Keosu is an open source CMS for mobile app
 Copyright (C) 2014  Vincent Le Borgne

 This program is free software: you can redistribute it and/or modify
 it under the terms of the GNU Affero General Public License as
 published by the Free Software Foundation, either version 3 of the
 License, or (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU Affero General Public License for more details.

 You should have received a copy of the GNU Affero General Public License
 along with this program.  If not, see <http://www.gnu.org/licenses/>.
 ************************************************************************/
app.controller('keosu-agricoleController', function ($scope, $http, $sce, usSpinnerService, cacheManagerService, localStorageService) {

    $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
 	var VACHE1 = "vache1";
 	var VACHE2 = "vache2";
 	var RESPIRATOIRE1 ="respiratoire1";
 	var RESPIRATOIRE2 ="respiratoire2";
 	var DIARRHEE1 = "diarrhee1";
 	var DIARRHEE2 = "diarrhee2";
 	var INFECTION1 = "infection1";
 	var INFECTION2 = "infection2";
 	var ACETONEMIE1 = "acetonemie1";
 	var ACETONEMIE2 = "acetonemie2";
 	var ACIDOSE1 = "acidose1";
 	var ACIDOSE2 = "acidose2";
 	var AVORTEMENT1 = "avortement1";
 	var AVORTEMENT2 = "avortement2";
 	var BOITERIE1 = "boiterie1";
 	var BOITERIE2 = "boiterie2";
 	var CESARIENNE1 ="cesarienne1";
 	var CESARIENNE2 ="cesarienne2";
 	var CAILLETTE1 = "caillette1";
 	var CAILLETTE2 = "caillette2";
 	var VITULAIRE1 = "vitulaire1";
 	var VITULAIRE2 = "vitulaire2";
 	var MAMMITEG1 = "mammiteG1";
 	var MAMMITEG2 = "mammiteG2";
 	var MAMMITEL1 = "mammiteL1";
 	var MAMMITEL2 = "mammiteL2";
 	var METRITE1 = "metrite1";
 	var METRITE2 = "metrite2";
 	var NONDELIVRANCE1 = "nonDelivrance1";
 	var NONDELIVRANCE2 = "nonDelivrance2";
 	var VELAGE1 = "velage1";
 	var VELAGE2 = "velage2";
 	var MORTALITEVEAUX1 = "mortaliteVeaux1";
 	var MORTALITEVEAUX2 = "mortaliteVeaux2";
 	var MORTALITEVACHE1 = "mortaliteVache1";
 	var MORTALITEVACHE2 = "mortaliteVache2";

 	$scope.init = function (params) {

 		$scope.accueil = true;
 		$scope.formulaire1 = false;
 		$scope.resultat1 = false;
 		$scope.formulaire2 = false;
 		$scope.resultat2 = false;
 		$scope.vache1 = localStorageService.get(VACHE1)
 		if ($scope.vache1 == null) {$scope.vache1 = 100;}

 		$scope.vache2 = localStorageService.get(VACHE2)
 		if ($scope.vache2 == null) {$scope.vache2 = 100;}

 		$scope.respiratoire1 = localStorageService.get(RESPIRATOIRE1)
 		if ($scope.respiratoire1 == null) {$scope.respiratoire1 = 2;}

 		$scope.respiratoire2 = localStorageService.get(RESPIRATOIRE2)
 		if ($scope.respiratoire2 == null) {$scope.respiratoire2 = 1;}
 		

 		$scope.diarrhee1 = localStorageService.get(DIARRHEE1)
 		if ($scope.diarrhee1 == null) {$scope.diarrhee1 = 2;}

 		$scope.diarrhee2 = localStorageService.get(DIARRHEE2)
 		if ($scope.diarrhee2 == null) {$scope.diarrhee2 = 1;}
 		

 		$scope.infection1 = localStorageService.get(INFECTION1)
 		if ($scope.infection1 == null) {$scope.infection1 = 2;}

 		$scope.infection2 = localStorageService.get(INFECTION2)
 		if ($scope.infection2 == null) {$scope.infection2 = 1;}
 		
 		$scope.acetonemie1 = localStorageService.get(ACETONEMIE1)
 		if ($scope.acetonemie1 == null) {$scope.acetonemie1= 2;}

 		$scope.acetonemie2 = localStorageService.get(ACETONEMIE2)
 		if ($scope.acetonemie2 == null) {$scope.acetonemie2= 1;}

 		$scope.acidose1 = localStorageService.get(ACIDOSE1)
 		if ($scope.acidose1 == null) {$scope.acidose1= 2;}

 		$scope.acidose2 = localStorageService.get(ACIDOSE2)
 		if ($scope.acidose2 == null) {$scope.acidose2= 1;}

 		$scope.avortement1 = localStorageService.get(AVORTEMENT1)
 		if ($scope.avortement1 == null) {$scope.avortement1= 2;}

 		$scope.avortement2 = localStorageService.get(AVORTEMENT2)
 		if ($scope.avortement2 == null) {$scope.avortement2= 1;}

 		$scope.boiterie1 = localStorageService.get(BOITERIE1)
 		if ($scope.boiterie1 == null) {$scope.boiterie1= 2;}

 		$scope.boiterie2 = localStorageService.get(BOITERIE2)
 		if ($scope.boiterie2 == null) {$scope.boiterie2= 1;}

 		$scope.caillette1 = localStorageService.get(CAILLETTE1)
 		if ($scope.caillette1 == null) {$scope.caillette1= 2;}

 		$scope.caillette2 = localStorageService.get(CAILLETTE2)
 		if ($scope.caillette2 == null) {$scope.caillette2= 1;}

 		$scope.cesarienne1 = localStorageService.get(CESARIENNE1)
 		if ($scope.cesarienne1 == null) {$scope.cesarienne1= 2;}

 		$scope.cesarienne2 = localStorageService.get(CESARIENNE2)
 		if ($scope.cesarienne2 == null) {$scope.cesarienne2= 1;}

 		$scope.vitulaire1 = localStorageService.get(VITULAIRE1)
 		if ($scope.vitulaire1 == null) {$scope.vitulaire1= 2;}
 		
 		$scope.vitulaire2 = localStorageService.get(VITULAIRE2)
 		if ($scope.vitulaire2 == null) {$scope.vitulaire2= 1;}

 		$scope.mammiteG1 = localStorageService.get(MAMMITEG1)
 		if ($scope.mammiteG1 == null) {$scope.mammiteG1= 2;}

 		$scope.mammiteG2 = localStorageService.get(MAMMITEG2)
 		if ($scope.mammiteG2 == null) {$scope.mammiteG2= 1;}

 		$scope.mammiteL1 = localStorageService.get(MAMMITEL1)
 		if ($scope.mammiteL1 == null) {$scope.mammiteL1= 2;}

 		$scope.mammiteL2 = localStorageService.get(MAMMITEL2)
 		if ($scope.mammiteL2 == null) {$scope.mammiteL2= 1;}

 		$scope.metrite1 = localStorageService.get(METRITE1)
 		if ($scope.metrite1 == null) {$scope.metrite1= 2;}

 		$scope.metrite2 = localStorageService.get(METRITE2)
 		if ($scope.metrite2 == null) {$scope.metrite2= 1;}

 		$scope.nonDelivrance1 = localStorageService.get(NONDELIVRANCE1)
 		if ($scope.nonDelivrance1 == null) {$scope.nonDelivrance1= 2;}

 		$scope.nonDelivrance2 = localStorageService.get(NONDELIVRANCE2)
 		if ($scope.nonDelivrance2 == null) {$scope.nonDelivrance2= 1;}

 		$scope.velage1 = localStorageService.get(VELAGE1)
 		if ($scope.velage1 == null) {$scope.velage1= 2;}

 		$scope.velage2 = localStorageService.get(VELAGE2)
 		if ($scope.velage2 == null) {$scope.velage2= 1;}

 		$scope.mortaliteVeaux1 = localStorageService.get(MORTALITEVACHE1)
 		if ($scope.mortaliteVeaux1 == null) {$scope.mortaliteVeaux1= 2;}

 		$scope.mortaliteVeaux2 = localStorageService.get(MORTALITEVACHE2)
 		if ($scope.mortaliteVeaux2 == null) {$scope.mortaliteVeaux2= 1;}

 		$scope.mortaliteVache1 = localStorageService.get(MORTALITEVACHE1)
 		if ($scope.mortaliteVache1 == null) {$scope.mortaliteVache1= 2;}

 		$scope.mortaliteVache2 = localStorageService.get(MORTALITEVACHE2)
 		if ($scope.mortaliteVache2 == null) {$scope.mortaliteVache2= 1;}

 		$scope.changeRespiratoire();
 		$scope.changeDiarrhee();
 		$scope.changeInfection();
 		$scope.changeAcetonemie();
 		$scope.changeAcidose();
 		$scope.changeAvortement();
 		$scope.changeBoiterie();
 		$scope.changeCesarienne();
 		$scope.changeCaillette();
 		$scope.changeVitulaire();
 		$scope.changeMammiteG();
 		$scope.changeMammiteL();
 		$scope.changeMetrite();
 		$scope.changeNonDelivrance();
 		$scope.changeVelage();
 		$scope.changeMortaliteVeaux();
 		$scope.changeMortaliteVache();

	}
	$scope.showAccueil = function(){
		$scope.accueil = true; 
		$scope.formulaire1 = false;
		$scope.resultat1 = false;
		$scope.formulaire2 = false;
		$scope.resultat2 = false;
	}
	$scope.showFormulaire1 = function(){
		$scope.accueil = false;
		$scope.formulaire1 = true;
		$scope.resultat1 = false;
		$scope.formulaire2 = false;
		$scope.resultat2 = false;
		$scope.changeRespiratoire();
 		$scope.changeDiarrhee();
 		$scope.changeInfection();
 		$scope.changeAcetonemie();
 		$scope.changeAcidose();
 		$scope.changeAvortement();
 		$scope.changeBoiterie();
 		$scope.changeCesarienne();
 		$scope.changeCaillette();
 		$scope.changeVitulaire();
 		$scope.changeMammiteG();
 		$scope.changeMammiteL();
 		$scope.changeMetrite();
 		$scope.changeNonDelivrance();
 		$scope.changeVelage();
 		$scope.changeMortaliteVeaux();
 		$scope.changeMortaliteVache();
		}
	$scope.resetFormulaire1 = function(){
		$scope.respiratoire1 = localStorageService.get(RESPIRATOIRE1)
 		if ($scope.respiratoire1 != null) {$scope.respiratoire1 = 2;}
		$scope.diarrhee1 = localStorageService.get(DIARRHEE1)
 		if ($scope.diarrhee1 != null) {$scope.diarrhee1 = 2;}
		$scope.infection1 = localStorageService.get(INFECTION1)
	 	if ($scope.infection1 != null) {$scope.infection1 = 2;}
		$scope.acetonemie1 = localStorageService.get(ACETONEMIE1)
 		if ($scope.acetonemie1 != null) {$scope.acetonemie1= 2;}
		$scope.acidose1 = localStorageService.get(ACIDOSE1)
 		if ($scope.acidose1 != null) {$scope.acidose1= 2;}
		$scope.avortement1 = localStorageService.get(AVORTEMENT1)
 		if ($scope.avortement1 != null) {$scope.avortement1= 2;}
		$scope.boiterie1 = localStorageService.get(BOITERIE1)
 		if ($scope.boiterie1 != null) {$scope.boiterie1= 2;}
		$scope.caillette1 = localStorageService.get(CAILLETTE1)
 		if ($scope.caillette1 != null) {$scope.caillette1= 2;}
		$scope.cesarienne1 = localStorageService.get(CESARIENNE1)
 		if ($scope.cesarienne1 != null) {$scope.cesarienne1= 2;}
		$scope.vitulaire1 = localStorageService.get(VITULAIRE1)
 		if ($scope.vitulaire1 != null) {$scope.vitulaire1= 2;}
		$scope.mammiteG1 = localStorageService.get(MAMMITEG1)
 		if ($scope.mammiteG1 != null) {$scope.mammiteG1= 2;}
		$scope.mammiteL1 = localStorageService.get(MAMMITEL1)
 		if ($scope.mammiteL1 != null) {$scope.mammiteL1= 2;}
		$scope.metrite1 = localStorageService.get(METRITE1)
 		if ($scope.metrite1 != null) {$scope.metrite1= 2;}
		$scope.nonDelivrance1 = localStorageService.get(NONDELIVRANCE1)
 		if ($scope.nonDelivrance1 != null) {$scope.nonDelivrance1= 2;}
		$scope.velage1 = localStorageService.get(VELAGE1)
 		if ($scope.velage1 != null) {$scope.velage1= 2;}
		$scope.mortaliteVeaux1 = localStorageService.get(MORTALITEVACHE1)
 		if ($scope.mortaliteVeaux1 != null) {$scope.mortaliteVeaux1= 2;}
		$scope.mortaliteVache1 = localStorageService.get(MORTALITEVACHE1)
 		if ($scope.mortaliteVache1 != null) {$scope.mortaliteVache1= 2;}
 		$scope.changeRespiratoire();
 		$scope.changeDiarrhee();
 		$scope.changeInfection();
 		$scope.changeAcetonemie();
 		$scope.changeAcidose();
 		$scope.changeAvortement();
 		$scope.changeBoiterie();
 		$scope.changeCesarienne();
 		$scope.changeCaillette();
 		$scope.changeVitulaire();
 		$scope.changeMammiteG();
 		$scope.changeMammiteL();
 		$scope.changeMetrite();
 		$scope.changeNonDelivrance();
 		$scope.changeVelage();
 		$scope.changeMortaliteVeaux();
 		$scope.changeMortaliteVache();
	}
	$scope.resetFormulaire2 = function(){
		$scope.respiratoire2 = localStorageService.get(RESPIRATOIRE2)
 		if ($scope.respiratoire2 != null) {$scope.respiratoire2 = 1;}
		$scope.diarrhee2 = localStorageService.get(DIARRHEE2)
 		if ($scope.diarrhee2 != null) {$scope.diarrhee2 = 1;}
		$scope.infection2 = localStorageService.get(INFECTION2)
 		if ($scope.infection2 != null) {$scope.infection2 = 1;}
		$scope.acetonemie2 = localStorageService.get(ACETONEMIE2)
 		if ($scope.acetonemie2 != null) {$scope.acetonemie2= 1;}
		$scope.acidose2 = localStorageService.get(ACIDOSE2)
 		if ($scope.acidose2 != null) {$scope.acidose2= 1;}
		$scope.avortement2 = localStorageService.get(AVORTEMENT2)
 		if ($scope.avortement2 != null) {$scope.avortement2= 1;}
		$scope.boiterie2 = localStorageService.get(BOITERIE2)
 		if ($scope.boiterie2 != null) {$scope.boiterie2= 1;}
		$scope.caillette2 = localStorageService.get(CAILLETTE2)
 		if ($scope.caillette2 != null) {$scope.caillette2= 1;}
		$scope.cesarienne2 = localStorageService.get(CESARIENNE2)
 		if ($scope.cesarienne2 != null) {$scope.cesarienne2= 1;}
		$scope.vitulaire2 = localStorageService.get(VITULAIRE2)
 		if ($scope.vitulaire2 != null) {$scope.vitulaire2= 1;}
		$scope.mammiteG2 = localStorageService.get(MAMMITEG2)
 		if ($scope.mammiteG2 != null) {$scope.mammiteG2= 1;}
		$scope.mammiteL2 = localStorageService.get(MAMMITEL2)
 		if ($scope.mammiteL2 != null) {$scope.mammiteL2= 1;}
		$scope.metrite2 = localStorageService.get(METRITE2)
 		if ($scope.metrite2 != null) {$scope.metrite2= 1;}
		$scope.nonDelivrance2 = localStorageService.get(NONDELIVRANCE2)
 		if ($scope.nonDelivrance2 != null) {$scope.nonDelivrance2= 1;}
		$scope.velage2 = localStorageService.get(VELAGE2)
 		if ($scope.velage2 != null) {$scope.velage2= 1;}
		$scope.mortaliteVeaux2 = localStorageService.get(MORTALITEVACHE2)
 		if ($scope.mortaliteVeaux2 != null) {$scope.mortaliteVeaux2= 1;}
		$scope.mortaliteVache2 = localStorageService.get(MORTALITEVACHE2)
 		if ($scope.mortaliteVache2 != null) {$scope.mortaliteVache2= 1;}
 		$scope.changeRespiratoire();
 		$scope.changeDiarrhee();
 		$scope.changeInfection();
 		$scope.changeAcetonemie();
 		$scope.changeAcidose();
 		$scope.changeAvortement();
 		$scope.changeBoiterie();
 		$scope.changeCesarienne();
 		$scope.changeCaillette();
 		$scope.changeVitulaire();
 		$scope.changeMammiteG();
 		$scope.changeMammiteL();
 		$scope.changeMetrite();
 		$scope.changeNonDelivrance();
 		$scope.changeVelage();
 		$scope.changeMortaliteVeaux();
 		$scope.changeMortaliteVache();
	}
	$scope.showResultat1 = function(){
		$scope.init = false;
		$scope.accueil = false;
		$scope.formulaire1 = false;
		$scope.resultat1 = true;
		$scope.formulaire2 = false;
		$scope.resultat2 = false;
		$scope.changeRespiratoire();
 		$scope.changeDiarrhee();
 		$scope.changeInfection();
 		$scope.changeAcetonemie();
 		$scope.changeAcidose();
 		$scope.changeAvortement();
 		$scope.changeBoiterie();
 		$scope.changeCesarienne();
 		$scope.changeCaillette();
 		$scope.changeVitulaire();
 		$scope.changeMammiteG();
 		$scope.changeMammiteL();
 		$scope.changeMetrite();
 		$scope.changeNonDelivrance();
 		$scope.changeVelage();
 		$scope.changeMortaliteVeaux();
 		$scope.changeMortaliteVache();
		$scope.totalManque1 = $scope.vache1*($scope.manqueRespiratoire1+$scope.manqueDiarrhee1
		+$scope.manqueInfection1+$scope.manqueAcetonemie1+$scope.manqueAcidose1+$scope.manqueAvortement1+
		$scope.manqueBoiterie1+$scope.manqueCesarienne1+$scope.manqueCaillette1+$scope.manqueVitulaire1+
		$scope.manqueMammiteG1+$scope.manqueMammiteL1+$scope.manqueMetrite1+$scope.manqueNonDelivrance1+
		$scope.manqueVelage1+$scope.manqueMortaliteVeaux1+$scope.manqueMortaliteVache1);
	}
	$scope.showFormulaire2 = function(){
		$scope.accueil = false;
		$scope.formulaire1 = false;
		$scope.formulaire2 = true;
		$scope.resultat1 = false;
		$scope.resultat2 = false;
		$scope.changeRespiratoire();
 		$scope.changeDiarrhee();
 		$scope.changeInfection();
 		$scope.changeAcetonemie();
 		$scope.changeAcidose();
 		$scope.changeAvortement();
 		$scope.changeBoiterie();
 		$scope.changeCesarienne();
 		$scope.changeCaillette();
 		$scope.changeVitulaire();
 		$scope.changeMammiteG();
 		$scope.changeMammiteL();
 		$scope.changeMetrite();
 		$scope.changeNonDelivrance();
 		$scope.changeVelage();
 		$scope.changeMortaliteVeaux();
 		$scope.changeMortaliteVache();
	}
	$scope.showResultat2 = function(){
		$scope.init = false;
		$scope.accueil = false;
		$scope.formulaire2 = false;
		$scope.resultat2 = true;
		$scope.formulaire1 = false;
		$scope.resultat1 = false;
		$scope.changeRespiratoire();
 		$scope.changeDiarrhee();
 		$scope.changeInfection();
 		$scope.changeAcetonemie();
 		$scope.changeAcidose();
 		$scope.changeAvortement();
 		$scope.changeBoiterie();
 		$scope.changeCesarienne();
 		$scope.changeCaillette();
 		$scope.changeVitulaire();
 		$scope.changeMammiteG();
 		$scope.changeMammiteL();
 		$scope.changeMetrite();
 		$scope.changeNonDelivrance();
 		$scope.changeVelage();
 		$scope.changeMortaliteVeaux();
 		$scope.changeMortaliteVache();
		$scope.totalManque2 = $scope.vache2*($scope.manqueRespiratoire2+$scope.manqueDiarrhee2
		+$scope.manqueInfection2+$scope.manqueAcetonemie2+$scope.manqueAcidose2+$scope.manqueAvortement2+
		$scope.manqueBoiterie2+$scope.manqueCesarienne2+$scope.manqueCaillette2+$scope.manqueVitulaire2+
		$scope.manqueMammiteL2+$scope.manqueMammiteG2+$scope.manqueMetrite2+$scope.manqueNonDelivrance2+
		$scope.manqueVelage2+$scope.manqueMortaliteVeaux2+$scope.manqueMortaliteVache2);
		$scope.gainPotentielTotal = $scope.totalManque1 - $scope.totalManque2;
	}
	$scope.calculIndice = function(maladie,vache){
		indice = 0 ;
		indice = maladie/vache*100;
		return indice;
	}
	$scope.changeRespiratoire = function(){
		localStorageService.set("respiratoire1", $scope.respiratoire1);
		localStorageService.set("respiratoire2", $scope.respiratoire2);
		$scope.indiceRespiratoire1 = $scope.calculIndice($scope.respiratoire1,$scope.vache1);
		$scope.manqueRespiratoire1 = $scope.indiceRespiratoire1 * 150;
		$scope.indiceRespiratoire2 = $scope.calculIndice($scope.respiratoire2,$scope.vache2);
		$scope.manqueRespiratoire2 = $scope.indiceRespiratoire2 * 150;
	}
	$scope.changeDiarrhee = function(){
		localStorageService.set("diarrhee1", $scope.diarrhee1);
		localStorageService.set("diarrhee2", $scope.diarrhee2);
		$scope.indiceDiarrhee1 = $scope.calculIndice($scope.diarrhee1,$scope.vache1);
		$scope.manqueDiarrhee1 = $scope.indiceDiarrhee1 * 150;
		$scope.indiceDiarrhee2 = $scope.calculIndice($scope.respiratoire2,$scope.vache2);
		$scope.manqueDiarrhee2 = $scope.indiceDiarrhee2 * 150;
	}
	$scope.changeInfection = function(){
		localStorageService.set("infection1", $scope.infection1);
		localStorageService.set("infection2", $scope.infection2);
		$scope.indiceInfection1 = $scope.calculIndice($scope.infection1,$scope.vache1);
		$scope.manqueInfection1 = $scope.indiceInfection1 * 70;
		$scope.indiceInfection2 = $scope.calculIndice($scope.infection2,$scope.vache2);
		$scope.manqueInfection2 = $scope.indiceInfection2 * 70;
	}
	$scope.changeAcetonemie = function(){
		localStorageService.set("acetonemie1", $scope.acetonemie1);
		localStorageService.set("acetonemie2", $scope.acetonemie2);
		$scope.indiceAcetonemie1 = $scope.calculIndice($scope.acetonemie1,$scope.vache1);
		$scope.manqueAcetonemie1 = $scope.indiceAcetonemie1 * 250;
		$scope.indiceAcetonemie2 = $scope.calculIndice($scope.acetonemie2,$scope.vache2);
		$scope.manqueAcetonemie2 = $scope.indiceAcetonemie2 * 250;
	}
	$scope.changeAcidose = function(){
		localStorageService.set("acidose1", $scope.acidose1);
		localStorageService.set("acidose2", $scope.acidose2);
		$scope.indiceAcidose1 = $scope.calculIndice($scope.acidose1,$scope.vache1);
		$scope.manqueAcidose1 = $scope.indiceAcidose1 * 150;
		$scope.indiceAcidose2 = $scope.calculIndice($scope.acidose2,$scope.vache2);
		$scope.manqueAcidose2 = $scope.indiceAcidose2 * 150;
	}
	$scope.changeAvortement = function(){
		localStorageService.set("avortement1", $scope.avortement1);
		localStorageService.set("avortement2", $scope.avortement2);
		$scope.indiceAvortement1 = $scope.calculIndice($scope.avortement1,$scope.vache1);
		$scope.manqueAvortement1 = $scope.indiceAvortement1 * 300;
		$scope.indiceAvortement2 = $scope.calculIndice($scope.avortement2,$scope.vache2);
		$scope.manqueAvortement2 = $scope.indiceAvortement2 * 300;
	}
	$scope.changeBoiterie = function(){
		localStorageService.set("boiterie1", $scope.boiterie1);
		localStorageService.set("boiterie2", $scope.boiterie2);
		$scope.indiceBoiterie1 = $scope.calculIndice($scope.boiterie1,$scope.vache1);
		$scope.manqueBoiterie1 = $scope.indiceBoiterie1 * 250;
		$scope.indiceBoiterie2 = $scope.calculIndice($scope.boiterie2,$scope.vache2);
		$scope.manqueBoiterie2 = $scope.indiceBoiterie2 * 250;
	}
	$scope.changeCesarienne = function(){
		localStorageService.set("cesarienne1", $scope.cesarienne1);
		localStorageService.set("cesarienne2", $scope.cesarienne2);
		$scope.indiceCesarienne1 = $scope.calculIndice($scope.cesarienne1,$scope.vache1);
		$scope.manqueCesarienne1 = $scope.indiceCesarienne1 * 500;
		$scope.indiceCesarienne2 = $scope.calculIndice($scope.cesarienne2,$scope.vache2);
		$scope.manqueCesarienne2 = $scope.indiceCesarienne2 * 500;
	}
	$scope.changeCaillette = function(){
		localStorageService.set("caillette1", $scope.caillette1);
		localStorageService.set("caillette2", $scope.caillette2);
		$scope.indiceCaillette1 = $scope.calculIndice($scope.caillette1,$scope.vache1);
		$scope.manqueCaillette1 = $scope.indiceCaillette1 * 400;
		$scope.indiceCaillette2 = $scope.calculIndice($scope.caillette2,$scope.vache2);
		$scope.manqueCaillette2 = $scope.indiceCaillette2 * 400;
	}
	$scope.changeVitulaire = function(){
		localStorageService.set("vitulaire1", $scope.vitulaire1);
		localStorageService.set("vitulaire2", $scope.vitulaire2);
		$scope.indiceVitulaire1 = $scope.calculIndice($scope.vitulaire1,$scope.vache1);
		$scope.manqueVitulaire1 = $scope.indiceVitulaire1 * 250;
		$scope.indiceVitulaire2 = $scope.calculIndice($scope.vitulaire2,$scope.vache2);
		$scope.manqueVitulaire2 = $scope.indiceVitulaire2 * 250;
	}
	$scope.changeMammiteG = function(){
		localStorageService.set("mammiteG1", $scope.mammiteG1);
		localStorageService.set("mammiteG2", $scope.mammiteG2);
		$scope.indiceMammiteG1 = $scope.calculIndice($scope.mammiteG1,$scope.vache1);
		$scope.manqueMammiteG1 = $scope.indiceMammiteG1 * 350;
		$scope.indiceMammiteG2 = $scope.calculIndice($scope.mammiteG2,$scope.vache2);
		$scope.manqueMammiteG2 = $scope.indiceMammiteG2 * 350;
	}
	$scope.changeMammiteL = function(){
		localStorageService.set("mammiteL1", $scope.mammiteL1);
		localStorageService.set("mammiteL2", $scope.mammiteL2);
		$scope.indiceMammiteL1 = $scope.calculIndice($scope.mammiteL1,$scope.vache1);
		$scope.manqueMammiteL1 = $scope.indiceMammiteL1 * 250;
		$scope.indiceMammiteL2 = $scope.calculIndice($scope.mammiteL2,$scope.vache2);
		$scope.manqueMammiteL2 = $scope.indiceMammiteL2 * 250;
	}
	$scope.changeMetrite = function(){
		localStorageService.set("metrite1", $scope.metrite1);
		localStorageService.set("metrite2", $scope.metrite2);
		$scope.indiceMetrite1 = $scope.calculIndice($scope.metrite1,$scope.vache1);
		$scope.manqueMetrite1 = $scope.indiceMetrite1 * 150;
		$scope.indiceMetrite2 = $scope.calculIndice($scope.metrite2,$scope.vache2);
		$scope.manqueMetrite2 = $scope.indiceMetrite2 * 150;
	}
	$scope.changeNonDelivrance = function(){
		localStorageService.set("nonDelivrance1", $scope.nonDelivrance1);
		localStorageService.set("nonDelivrance2", $scope.nonDelivrance2);
		$scope.indiceNonDelivrance1 = $scope.calculIndice($scope.nonDelivrance1,$scope.vache1);
		$scope.manqueNonDelivrance1 = $scope.indiceNonDelivrance1 * 130;
		$scope.indiceNonDelivrance2 = $scope.calculIndice($scope.nonDelivrance2,$scope.vache2);
		$scope.manqueNonDelivrance2 = $scope.indiceNonDelivrance2 * 130;
	}
	$scope.changeVelage = function(){
		localStorageService.set("velage1", $scope.velage1);
		localStorageService.set("velage2", $scope.velage2);
		$scope.indiceVelage1 = $scope.calculIndice($scope.velage1,$scope.vache1);
		$scope.manqueVelage1 = $scope.indiceVelage1 * 100;
		$scope.indiceVelage2 = $scope.calculIndice($scope.velage2,$scope.vache2);
		$scope.manqueVelage2 = $scope.indiceVelage2 * 100;
	}
	$scope.changeMortaliteVeaux = function(){
		localStorageService.set("mortaliteVeaux1", $scope.mortaliteVeaux1);
		localStorageService.set("mortaliteVeaux2", $scope.mortaliteVeaux2);
		$scope.indiceMortaliteVeaux1 = $scope.calculIndice($scope.mortaliteVeaux1,$scope.vache1);
		$scope.manqueMortaliteVeaux1 = $scope.indiceMortaliteVeaux1 * 150;
		$scope.indiceMortaliteVeaux2 = $scope.calculIndice($scope.mortaliteVeaux2,$scope.vache2);
		$scope.manqueMortaliteVeaux2 = $scope.indiceMortaliteVeaux2 * 150;
	}	
	$scope.changeMortaliteVache = function(){
		localStorageService.set("mortaliteVache1", $scope.mortaliteVache1);
		localStorageService.set("mortaliteVache2", $scope.mortaliteVache2);
		$scope.indiceMortaliteVache1 = $scope.calculIndice($scope.mortaliteVache1,$scope.vache1);
		$scope.manqueMortaliteVache1 = $scope.indiceMortaliteVache1 * 1200;
		$scope.indiceMortaliteVache2 = $scope.calculIndice($scope.mortaliteVache2,$scope.vache2);
		$scope.manqueMortaliteVache2 = $scope.indiceMortaliteVache2 * 1200;
	}
});