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
app.controller('keosu-ration-calculatorController', function ($scope, $http, $sce, usSpinnerService, cacheManagerService, localStorageService) {

    $http.defaults.headers.post["Content-Type"] = "application/x-www-form-urlencoded";
    var POIDS = "poids";
    var POTENTIEL = "potentiel";
    var RESERVES = "reserves";
    var LACTATIONPRIMI = "lactationPrimi";
    var LACTATIONMULTI = "lactationMulti";
    var GESTATION = "gestation";
    var MATURITE = "maturite";
    var MAIS = "mais";
    var LUZERNE = "luzerne";
    var HERBE = "herbe";
    var GRAIN = "grain";
    var ORGE = "orge";
    var BLE ="ble";

 	$scope.init = function (params) {

 		$scope.ecranChoix = true;
       	$scope.ecranValeurs1 = false;
       	$scope.ecranValeurs2 = false;
		$scope.ecranResultat1 =false;
		$scope.ecranResultat2 =false;
		$scope.poids = localStorageService.get(POIDS)
		if ($scope.poids == null) {
			$scope.poids = 650;
		}
		$scope.changePoids();
	
		$scope.potentiel = localStorageService.get(POTENTIEL)
		if ($scope.potentiel == null) {
			$scope.potentiel = 30;
		}
		$scope.changePotentiel();

		$scope.reserves = localStorageService.get(RESERVES)
			if ($scope.reserves == null) {
				$scope.reserves = 2.5;
			}
		$scope.changeReserves();
		
	
		$scope.lactationPrimi = localStorageService.get(LACTATIONPRIMI)
			if ($scope.lactationPrimi == null) {
				$scope.lactationPrimi = 10;
			}	
		$scope.changeLactationPrimi();

		$scope.lactationMulti = localStorageService.get(LACTATIONMULTI)
		if ($scope.lactationMulti == null) {
			$scope.lactationMulti = 10;
		}
		$scope.changeLactationMulti();

		$scope.gestation = localStorageService.get(GESTATION)
		if ($scope.gestation == null) {
		$scope.gestation = 34;
		}
		$scope.changeGestation();

		$scope.maturite = localStorageService.get(MATURITE)
		if($scope.maturite == null){
			$scope.maturite = 60;
		}
		$scope.changeMaturite();
	}
	$scope.resetAnimal = function() {
		$scope.poids = localStorageService.get(POIDS)
		if ($scope.poids != null) {
			$scope.poids = 650;
		}
		$scope.changePoids();
	
		$scope.potentiel = localStorageService.get(POTENTIEL)
		if ($scope.potentiel != null) {
			$scope.potentiel = 30;
		}
		$scope.changePotentiel();

		$scope.reserves = localStorageService.get(RESERVES)
			if ($scope.reserves != null) {
				$scope.reserves = 2.5;
			}
		$scope.changeReserves();
		
	
		$scope.lactationPrimi = localStorageService.get(LACTATIONPRIMI)
			if ($scope.lactationPrimi != null) {
				$scope.lactationPrimi = 10;
			}	
		$scope.changeLactationPrimi();

		$scope.lactationMulti = localStorageService.get(LACTATIONMULTI)
		if ($scope.lactationMulti != null) {
			$scope.lactationMulti = 10;
		}
		$scope.changeLactationMulti();

		$scope.gestation = localStorageService.get(GESTATION)
		if ($scope.gestation != null) {
		$scope.gestation = 34;
		}
		$scope.changeGestation();

		$scope.maturite = localStorageService.get(MATURITE)
		if($scope.maturite != null){
			$scope.maturite = 60;
		}
		$scope.changeMaturite();
		}

	$scope.resetAliment =function(){

		$scope.mais = localStorageService.get(MAIS)
		if ($scope.mais != null) {
			$scope.mais = 30;
		}
		$scope.changeMais();

		$scope.luzerne = localStorageService.get(LUZERNE)
		if ($scope.luzerne != null) {
			$scope.luzerne = 1.5;
		}
		$scope.changeLuzerne();

		$scope.herbe = localStorageService.get(HERBE)
		if ($scope.herbe != null) {
			$scope.herbe = 9;
		}
		$scope.changeHerbe();
		

		$scope.grain = localStorageService.get(GRAIN)
		if ($scope.grain != null) {
			$scope.grain = 1;
		}
		$scope.changeGrain();

		$scope.orge = localStorageService.get(ORGE)
		if ($scope.orge != null) {
			$scope.orge = 0.5;
		}
		$scope.changeOrge();
		
		$scope.ble = localStorageService.get(BLE)
		if ($scope.ble != null) {
			$scope.ble = 0.8;
		}
		$scope.changeBle();
	}

    /////////////////////////
    // Init part
    /////////////////////////
    $scope.showEcranChoix = function(){
    	$scope.ecranChoix = true;
    	$scope.ecranValeurs1 = false;
    	$scope.ecranValeurs2 = false;
    	$scope.ecranResultat1 = false;
    	$scope.ecranResultat2 = false;
    	$scope.ecranAliments = false;

    }
	$scope.showEcranValeurs1 = function(){
		$scope.ecranChoix =false;
		$scope.ecranValeurs1 = true;
		$scope.ecranResultat1 = false;

		
	}
	$scope.showEcranValeurs2 = function(){
		$scope.ecranChoix=false;
		$scope.ecranValeurs2 =true;
		$scope.ecranResultat2 =false;
	}
	$scope.showEcranResultat1 = function(){
		$scope.ecranValeurs1 = true;
		$scope.ecranResultat1 = true;
		
		$scope.resultat = (parseFloat($scope.indiceA)+parseFloat($scope.indiceB)+parseFloat($scope.indiceC))
		*parseFloat($scope.indiceD)*parseFloat($scope.indiceE)*parseFloat($scope.indiceF);
	}
	$scope.showEcranResultat2 = function(){
		$scope.ecranValeurs2 = true;
		$scope.ecranResultat2 = true;
		
		$scope.resultat = (parseFloat($scope.indiceA)+parseFloat($scope.indiceB)+parseFloat($scope.indiceC))
		*parseFloat($scope.indiceD)*parseFloat($scope.indiceE)*parseFloat($scope.indiceF);
	}

	$scope.changePoids = function(){
		localStorageService.set("poids", $scope.poids);
		$scope.indiceA = $scope.calculPoids($scope.poids);

	}
	$scope.calculPoids= function(poids){
		var indice = 0;
		if (poids<351) {
			indice = NaN;
		}else if(poids >351 && poids <=400){
			indice = 10.9;
		}else if(poids >401 && poids <=450){
			indice = 11.65;
		}else if (poids >451 && poids <=500){
			indice = 12.4;
		}else if (poids >501 && poids <=550){
			indice = 13.15;
		}else if (poids >551 && poids <=600){
			indice = 13.9;
		}else if (poids >601 && poids <= 650){
			indice = 14.65;
		}else if (poids >651 && poids <= 700){
			indice = 15.4;
		}else if (poids >701 && poids <= 750){
			indice = 16.15;
		}else if (poids >751 && poids <= 800){
			indice = 16.9;
		}
		return indice;

	}
	$scope.changePotentiel = function(){
		localStorageService.set("potentiel", $scope.potentiel);
		$scope.indiceB = parseFloat($scope.potentiel)/((2/3)*10);//afficher deux chiffres apres la virgule+arrondirau dessus
	}
	$scope.changeReserves = function(){
		localStorageService.set("reserves", $scope.reserves);
		$scope.indiceC = $scope.calculReserves($scope.reserves);

	}
	$scope.calculReserves = function(reserves){
		var indice = 0;
	
		if(reserves >0 && reserves <=0.5){
			indice = 3.75;
		}else if(reserves >0.5 && reserves <=1){
			indice = 3;
		}else if (reserves >1 && reserves <=1.5){
			indice = 2.25;
		}else if (reserves >1.5 && reserves <=2){
			indice = 1.5;
		}else if (reserves >2 && reserves <=2.5){
			indice = 0.75;
		}else if (reserves >2.5 && reserves <= 3){
			indice = 0;
		}else if (reserves >3 && reserves <= 3.5){
			indice = -0.75;
		}else if (reserves >3.5 && reserves <= 4){
			indice = -1.5;
		}else if (reserves >4 && reserves <= 4.5){
			indice = -2.25;
		}else if (reserves >4.5 && reserves <=5){
			indice =-3;
		}
		return indice;
	}
	$scope.changeLactationPrimi = function(){
		localStorageService.set("lactationPrimi", $scope.lactationPrimi);
		$scope.indiceD = $scope.calculLactationPrimi($scope.lactationPrimi);
	}
	$scope.calculLactationPrimi = function(lactation){
		var indice = 0;
	
		if(lactation >0 && lactation <=1){
			indice = 0.66;
		}else if(lactation >1 && lactation <=2){
			indice =0.71;
		}else if (lactation >2 && lactation <=3){
			indice =0.75;
		}else if (lactation >3 && lactation <=4){
			indice =0.79;
		}else if (lactation >4 && lactation <=6){
			indice =0.85;
		}else if (lactation >6 && lactation <= 8){
			indice =0.89;
		}else if (lactation >8 && lactation <= 10){
			indice =0.92;		
		}else if (lactation >10 && lactation <= 12){
			indice =0.94;
		}else if (lactation >12 && lactation <= 14){
			indice =0.96;
		}else if (lactation >14 && lactation <= 16){
			indice =0.97;
		}else if (lactation >16 && lactation <= 20){
			indice =0.98;
		}else if (lactation >20 && lactation <= 24){
			indice =0.99;
		}else if (lactation >24 ){
			indice = 1;
		}
		return indice;
	}
	$scope.changeLactationMulti = function(){
		localStorageService.set("lactationMulti", $scope.lactationMulti);
		$scope.indiceG = $scope.calculLactationMulti($scope.lactationMulti);
	}
	$scope.calculLactationMulti= function(lactation){
		var indice = 0;
	
		if(lactation >0 && lactation <=1){
			indice =0.74;
		}else if(lactation >1 && lactation <=2){
			indice =0.78;
		}else if (lactation >2 && lactation <=3){
			indice =0.81;
		}else if (lactation >3 && lactation <=4){
			indice =0.84;
		}else if (lactation >4 && lactation <=6){
			indice =0.89;
		}else if (lactation >6 && lactation <= 8){
			indice =0.92;
		}else if (lactation >8 && lactation <= 10){
			indice =0.94;		
		}else if (lactation >10 && lactation <= 12){
			indice =0.96;
		}else if (lactation >12 && lactation <= 14){
			indice =0.97;
		}else if (lactation >14 && lactation <= 16){
			indice =0.98;
		}else if (lactation >16 && lactation <= 20){
			indice =0.99;
		}else if (lactation >20 && lactation <= 24){
			indice =0.99;
		}else if (lactation >24 ){
			indice = 1;
		}
		return indice;
	}
	$scope.changeGestation = function(){
		localStorageService.set("gestation", $scope.gestation);
		$scope.indiceE = $scope.calculGestation($scope.gestation);
	}
	$scope.calculGestation = function(gestation){
		var indice = 0;
	
		if(gestation <30 ){
			indice = 1;
		}else if(gestation >=30 && gestation <31){
			indice = 0.98;
		}else if (gestation >=31 && gestation <32){
			indice = 0.98;
		}else if (gestation >=32 && gestation <33){
			indice = 0.97;
		}else if (gestation >=33 && gestation <34){
			indice = 0.97;
		}else if (gestation >=34 && gestation <35){
			indice = 0.96;
		}else if (gestation >=35 && gestation <36){
			indice = 0.94;
		}else if (gestation >=36 && gestation <37){
			indice = 0.93;
		}else if (gestation >=37 && gestation <38){
			indice = 0.91;
		}else if (gestation >=38 && gestation <39){
			indice =0.88;
		}else if (gestation >=39 && gestation <40){
			indice =0.84;
		}else if (gestation >=40 ){
			indice =0.8;
		}
		return indice;
	}
	$scope.changeMaturite = function(){
		localStorageService.set("maturite", $scope.maturite);
		$scope.indiceF = $scope.calculMaturite($scope.maturite);
	}
	$scope.calculMaturite = function(maturite){
		var indice = 0;
		if (maturite < 20 ) {
			indice = "trop jeune";
		}
		else if(maturite <=20){
			indice = 0.78;
		}else if(maturite >20 && maturite <=24){
			indice = 0.84;
		}else if (maturite >24 && maturite <=28){
			indice = 0.88;
		}else if (maturite >28 && maturite <=32){
			indice = 0.91;
		}else if (maturite >32 && maturite <=36){
			indice = 0.94;
		}else if (maturite >36 && maturite <= 40){
			indice = 0.96;
		}else if (maturite >40 && maturite <= 44){
			indice = 0.97;
		}else if (maturite >44 && maturite <= 48){
			indice = 0.98;
		}else if (maturite >48 && maturite <= 52){
			indice = 0.98;
		}else if (maturite >52 && maturite <= 56){
			indice = 0.99;
		}else if (maturite >56){
			indice = 1;
		}
		return indice;

	}
	$scope.showEcranAliments = function(){
		$scope.ecranValeurs1 =false;
		$scope.ecranValeurs2 =false;
		$scope.ecranResultat1 =false;
		$scope.ecranResultat2 =false;
		$scope.ecranAliments =true;
		$scope.ecranCalculs = false;
		$scope.mais = localStorageService.get(MAIS)
		if ($scope.mais == null) {
			$scope.mais = 30;
		}
		$scope.changeMais();

		$scope.luzerne = localStorageService.get(LUZERNE)
		if ($scope.luzerne == null) {
			$scope.luzerne = 1.5;
		}
		$scope.changeLuzerne();

		$scope.herbe = localStorageService.get(HERBE)
		if ($scope.herbe == null) {
			$scope.herbe = 9;
		}
		$scope.changeHerbe();
		

		$scope.grain = localStorageService.get(GRAIN)
		if ($scope.grain == null) {
			$scope.grain = 1;
		}
		$scope.changeGrain();

		$scope.orge = localStorageService.get(ORGE)
		if ($scope.orge == null) {
			$scope.orge = 0.5;
		}
		$scope.changeOrge();
		
		$scope.ble = localStorageService.get(BLE)
		if ($scope.ble == null) {
			$scope.ble = 0.8;
		}
		$scope.changeBle();
	}
	$scope.changeMais = function(){
		localStorageService.set("mais", $scope.mais);
		$scope.apportMais = parseFloat($scope.mais)*0.39;
		$scope.encombrementMais = parseFloat($scope.apportMais)*0.94;
		$scope.energieMais = parseFloat($scope.encombrementMais)*0.92;
		$scope.azoteMais1 = parseFloat($scope.energieMais)*43;
		$scope.azoteMais2 = parseFloat($scope.energieMais)*69;

	}
	$scope.changeLuzerne = function(){
		localStorageService.set("luzerne", $scope.luzerne);
		$scope.apportLuzerne = parseFloat($scope.luzerne)*0.85;
		$scope.encombrementLuzerne = parseFloat($scope.apportLuzerne)*1.33;
		$scope.energieLuzerne = parseFloat($scope.encombrementLuzerne)*0.65;
		$scope.azoteLuzerne1 = parseFloat($scope.energieLuzerne)*62;
		$scope.azoteLuzerne2 = parseFloat($scope.energieLuzerne)*75;
	}
	$scope.changeHerbe = function(){
		localStorageService.set("herbe", $scope.herbe);
		$scope.apportHerbe = parseFloat($scope.herbe)*0.3;
		$scope.encombrementHerbe = parseFloat($scope.apportHerbe)*1.21;
		$scope.energieHerbe = parseFloat($scope.encombrementHerbe)*0.93;
		$scope.azoteHerbe1 = parseFloat($scope.energieHerbe)*92;
		$scope.azoteHerbe2 = parseFloat($scope.energieHerbe)*69;
	}
	$scope.changeGrain = function(){
		localStorageService.set("grain", $scope.grain);
		$scope.apportGrain = parseFloat($scope.grain)*0.86;
		$scope.encombrementGrain = 0;
		$scope.energieGrain = parseFloat($scope.apportGrain)*1.05;
		$scope.azoteGrain1 = parseFloat($scope.energieGrain)*63;
		$scope.azoteGrain2 = parseFloat($scope.energieGrain)*84;
	}
	$scope.changeOrge = function(){
		localStorageService.set("orge", $scope.orge);
		$scope.apportOrge = parseFloat($scope.orge)*0.43;
		$scope.encombrementOrge = parseFloat($scope.apportOrge)*0.64;
		$scope.energieOrge = parseFloat($scope.encombrementOrge)*1.01;
		$scope.azoteOrge1 = parseFloat($scope.energieOrge)*79;
		$scope.azoteOrge2 = parseFloat($scope.energieOrge)*93;
	}
	$scope.changeBle = function(){
		localStorageService.set("ble", $scope.ble);
		$scope.apportBle = parseFloat($scope.ble)*0.88;
		$scope.encombrementBle = parseFloat($scope.apportBle)*1.54;		
		$scope.energieBle = parseFloat($scope.encombrementBle)*0.42;
		$scope.azoteBle1 = parseFloat($scope.energieBle)*22;
		$scope.azoteBle2 = parseFloat($scope.energieBle)*44;
	}
	$scope.showEcranCalculs = function(){
		$scope.ecranAliments = false;
		$scope.ecranCalculs = true;
		$scope.ecranEquilibre = false;
		$scope.matiereseche = parseFloat($scope.apportMais)+parseFloat($scope.apportLuzerne)+
		parseFloat($scope.apportHerbe)+parseFloat($scope.apportGrain)+parseFloat($scope.apportOrge);
		$scope.encombrement= parseFloat($scope.encombrementMais)+parseFloat($scope.encombrementLuzerne)+
		parseFloat($scope.encombrementHerbe)+parseFloat($scope.encombrementGrain)+parseFloat($scope.encombrementOrge);
		$scope.energie = parseFloat($scope.energieMais)+parseFloat($scope.energieLuzerne)+
		parseFloat($scope.energieHerbe)+parseFloat($scope.energieGrain)+parseFloat($scope.energieOrge);
		$scope.azote1 = parseFloat($scope.azoteMais1)+parseFloat($scope.azoteLuzerne1)+
		parseFloat($scope.azoteHerbe1)+parseFloat($scope.azoteGrain1)+parseFloat($scope.azoteOrge1);
		$scope.azote2 = parseFloat($scope.azoteMais2)+parseFloat($scope.azoteLuzerne2)+
		parseFloat($scope.azoteHerbe2)+parseFloat($scope.azoteGrain2)+parseFloat($scope.azoteOrge2);
		$scope.besoinEnergie = (0.6*parseInt($scope.poids)/100)+1.4;
		$scope.besoinAzote = 95+(0.5*$scope.poids);
		$scope.resteEnergie = $scope.energie - $scope.besoinEnergie;
		$scope.resteAzote1 = $scope.azote1 - $scope.besoinAzote;
		$scope.resteAzote2 = $scope.azote2 - $scope.besoinAzote;
		$scope.productionEnergie = $scope.resteEnergie/0.44;
		$scope.productionAzote1 = $scope.resteAzote1/50;
		$scope.productionAzote2 = $scope.resteAzote2/50;
	}
	$scope.showEcranEquilibre = function(){
		$scope.ecranCalculs = false; 
		$scope.ecranEquilibre = true;
		if ($scope.productionEnergie>$scope.productionAzote1) {
			$scope.equilibre = $scope.productionEnergie - $scope.productionAzote1;
			$scope.correcteur = "Tourteau de soja 48 ";
			$scope.correction = $scope.equilibre/4.2;
			$scope.correctionEnergie = $scope.correction*1.06;
			$scope.correctionAzote1 = $scope.correction*331;
			$scope.correctionAzote2 =$scope.correction*229;
			$scope.resteEnergie += $scope.correctionEnergie;
			$scope.resteAzote1 += $scope.correctionAzote1;
			$scope.resteAzote2 += $scope.correctionAzote2;
			$scope.productionEnergie = $scope.resteEnergie/0.44;
			$scope.productionAzote1 = $scope.resteAzote1/50;
			$scope.productionAzote2 = $scope.resteAzote2/50;
		}else{
			$scope.equilibre = $scope.productionAzote1 - $scope.productionEnergie; 
			// ajouter un correcteur énergétique par défaut;
		}
	}

});



