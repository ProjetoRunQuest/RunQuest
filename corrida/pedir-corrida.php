<?php 
$is_index = 2;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="shortcut icon" href="../assets/img/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/pedir-corrida.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwbJtgkmfJTY0TYh0r1O9-9e975P9caZA&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" />
	<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"></script>
	<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
    <title>Pedir corrida</title>
</head>
<body onload="pegarPosicao();">
<!--header-->
<?php require_once '../header/header.php'?>

<!--OBJETIVO RUNQUEST-->
<section id="mapa" class='container-animacao'>
    <h1 class='titulo-mapa'>Origem</h1>
    <input type="text" name="ruaOrigem" id="ruaOrigem" placeholder='rua de destino' style='width: 350px;' class="input-cadastro">

    <h1 class='titulo-mapa'>Destino</h1>
    <input type="text" name="ruaDestino" id="ruaDestino" placeholder='rua de destino' style='width: 350px;' class="input-cadastro">
    <span class='span-botao'><button onclick='calcularRota()' class='botao-banner'>Calcular Rota</button></span>

    <div id="map" style='width: 500px; height: 500px;'></div>


    <script>
        (g => { var h, a, k, p = "The Google Maps JavaScript API", c = "google", l = "importLibrary", q = "__ib__", m = document, b = window; b = b[c] || (b[c] = {}); var d = b.maps || (b.maps = {}), r = new Set, e = new URLSearchParams, u = () => h || (h = new Promise(async (f, n) => { await (a = m.createElement("script")); e.set("libraries", [...r] + ""); for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]); e.set("callback", c + ".maps." + q); a.src = `https://maps.${c}apis.com/maps/api/js?` + e; d[q] = f; a.onerror = () => h = n(Error(p + " could not load.")); a.nonce = m.querySelector("script[nonce]")?.nonce || ""; m.head.append(a) })); d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n)) })
            ({ key: "AIzaSyAwbJtgkmfJTY0TYh0r1O9-9e975P9caZA", v: "weekly" });


        //MINHA CHAVE DE API
        apiToken = 'AIzaSyAwbJtgkmfJTY0TYh0r1O9-9e975P9caZA';

        let map2;
        let directionsService;
        let directionsRenderer;
        let sourceAutocomplete;
        let desAutocomplete;

        //CHAMANDO A FUNCAO PARA TRAZER O MAPA
        async function initMap() {
            const { Map } = await google.maps.importLibrary("maps");

            map2 = new Map(document.getElementById("map"), {
                center: { lat: -34.397, lng: 150.644 },
                zoom: 13,
            });

            //CHAMANDO A API DE ORIGEM E DESTINO
            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer();
            directionsRenderer.setMap(map2);

            //FAZENDO UM AUTOCOMPLETE NOS CAMPOS DE TEXTO
            sourceAutocomplete = new google.maps.places.Autocomplete(
                document.getElementById('ruaOrigem')
            );
            desAutocomplete = new google.maps.places.Autocomplete(
                document.getElementById('ruaDestino')
            );
        }

        //EXECUTANDO A FUNÇÃO APÓS CRIA-LA
        initMap();

        //DANDO UM JEITO NA GAMBIARRA DE MOSTRAR A LOCALIZACAO
        function pegarPosicao(){
            var origem = document.getElementById('ruaOrigem');
            navigator.geolocation.getCurrentPosition(function () { }, function () { }, {});
            navigator.geolocation.getCurrentPosition(function (position) {
            const posicao = [position.coords.latitude, position.coords.longitude];

            //TRANSFORMANDO DE LATITUDE E LONGITUDE PARA ENDEREÇO
            $.ajax({
            method: 'POST',
            url: `https://maps.googleapis.com/maps/api/geocode/json?latlng=${posicao[0]},${posicao[1]}&sensor=true&key=AIzaSyAwbJtgkmfJTY0TYh0r1O9-9e975P9caZA`,
            success:function(data){
                console.log(data.results[0].formatted_address);
                ruaOrigem.value = data.results[0].formatted_address;
            }
        });

        }, function (e) {
            console.log('deu errado');
        }, {
            enableHighAccuracy: true
        });
        }

        </script>

    <span class='span-botao'><button onclick='solicitarCorrida()' class='botao-banner'>Solicitar Corrida</button></span>

</section>

<section id="mapa-motorista">
    <h1 class="titulo-motorista">Acompanhe onde o motorista está!</h1>
    <div id="map2" style='width: 500px; height: 500px;'></div>
    <script>
		// Personalizar css no mapa
		let myCustomColourUser = 'background-color: red;'
		const markerHtml = `
			width: 3rem;
			height: 3rem;
			display: block;
			left: -1.5rem;
			top: -1.5rem;
			position: relative;
			border-radius: 3rem 3rem 0;
			transform: rotate(45deg);
			border: 3px solid #FFFFFF;`

		// Coordenadas do Ponta A - Táxi(Rua Avenida Leonor) - longitude e latitude
		const coordTaxi = [-23.675907756277052, -46.62769666643045];
		// Coordenadas do Ponta B - Usuário(Fatec Diadema) - longitude e latitude
		const coordUser = [-23.673492102672295, -46.61876475881608];

		// Iniciar o mapa com coordenadas do ponto A
		const map = L.map('map2').setView(coordTaxi, 40);

		L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);


		// Personalizar Ponto na mapa com imagem do táxi.
		const taxiIcon = L.icon({
			className: "taxi-pointers",
			iconUrl: '../assets/img/taxi.svg',
			iconSize: [45, 45]
		})
		const marker = L.marker(coordTaxi, { icon: taxiIcon }).addTo(map);

		function startService(){
			// Array de coordenadas. Simula o táxi enviando a localização para o APP.
            -23.67433366309378, -46.62111767854996
			const latlng = [
				{ lat: -23.67696681057463 , lng: -46.62725172424193},
				{ lat: -23.677379024673492, lng:  -46.62548346440048},
				{ lat: -23.677688184394217, lng:  -46.62395633090106},
				{ lat: -23.677614575003254, lng: -46.622445272491085},
				{ lat: -23.67656931717631, lng:  -46.622284521596406},
				{ lat: -23.675524050987946, lng: -46.621336091317815},
                { lat: -23.67433366309378, lng: -46.62111767854996},
				{ lat: -23.673492102672295, lng: -46.61876475881608}
			]

		   // Personalizar Ponto na mapa com imagem do Usuário.
			const icon = L.divIcon({
				className: "pointers",
				iconAnchor: [0, 24],
				labelAnchor: [-6, 0],
				popupAnchor: [0, -36],
				html: `<span style="${markerHtml}${myCustomColourUser}" />`
			})
			var newMarker = L.marker([coordUser[0], coordUser[1]], { icon }).addTo(map);

			// Identifica a melhor rota para iniciar a viagem.
			L.Routing.control({
				waypoints: [
					L.latLng(coordTaxi[0], coordTaxi[1]),
					L.latLng(coordUser[0], coordUser[1])
				]
			}).on('routesfound', function (e) {
				// Loop de coordenadas. Simula o táxi enviando a localização para o APP.
				latlng.forEach(function (coord, index) {
					setTimeout(function () {
						marker.setLatLng([coord.lat, coord.lng]);
						// Identifica o final da viagem.
						if (coord.lat === coordUser[0] && coord.lng === coordUser[1]) {
							//Fechando o popup atual e abrdo o de começar a corrida
                            const mapaMotorista = document.getElementById('mapa-motorista');
                            const comecarCorrida = document.getElementById('comecar-corrida');
                            mapaMotorista.style.opacity = '0';
                            setTimeout(() => {
                                mapaMotorista.style.display = 'none';
                                setTimeout(function(){
                                    comecarCorrida.style.display = 'flex';
                                    setTimeout(function(){
                                        comecarCorrida.style.opacity = '1';
                                    })
                                }, 200);
                            }, 500);
						}
					}, 1000 * index)
				})

			}).addTo(map);
		};


	</script>
</section>

<section id="acompanhar-corrida">
    <h1 class="titulo-motorista">Sua rota até o local de destino:</h1>
    <div id="map3" style='width: 500px; height: 500px;'></div>

    <script>
		// Coordenadas do Ponta A - Usuário Origem - Fatec Diadema - longitude e latitude
		const coordTaxi2 = [-23.673492102672295, -46.61876475881608];
		// Coordenadas do Ponta B - Destino Final - Fatec Zona Sul
		const coordUser2 = [-23.66263258392399, -46.729343608907975];

		// Iniciar o mapa com coordenadas do ponto A
		const map3 = L.map('map3').setView(coordTaxi2, 40);

		L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map3);


		// Personalizar Ponto na mapa com imagem do táxi.
		const taxiIcon2 = L.icon({
			className: "taxi-pointers",
			iconUrl: '../assets/img/taxi.svg',
			iconSize: [45, 45]
		})
		const marker2 = L.marker(coordTaxi2, { icon: taxiIcon2 }).addTo(map3);

		function comecarServico(){
			// Array de coordenadas. Simula o táxi enviando a localização para o APP.
			const latlng = [
				{ lat: -23.673492102672295 , lng: -46.61876475881608},
				{ lat: -23.677296569310176, lng:  -46.614748631927355},
				{ lat: -23.68082317954772, lng:  -46.616308535715},
                { lat: -23.680456846374504, lng: -46.61589318340366},
                { lat: -23.682059702885233, lng: -46.61735472146519},
                { lat: -23.684406117154126, lng: -46.61639840643727},
                { lat: -23.68534797581537, lng: -46.619556050397385},
                { lat: -23.685265356906307, lng: -46.6241211013797},
                { lat: -23.68462092762208, lng: -46.63029203986173},
                { lat: -23.6831833431463, lng: -46.63491122188337},
                { lat: -23.68123349064488, lng: -46.63453230460816},
                { lat: -23.681596065672323, lng: -46.63655926697631},
                { lat: -23.681919051043, lng: -46.638581767021485},
                { lat: -23.68400513090962, lng: -46.63981787761739},
                { lat: -23.684403275393667, lng: -46.64056405497151},
                { lat: -23.683376541386032, lng: -46.64116486978534},
                { lat: -23.68341092973309, lng: -46.64306923818883},
                { lat: -23.684912653548377, lng: -46.64530684566484},
                { lat: -23.68512654256355, lng: -46.64665225064809},
                { lat: -23.68411848844061, lng: -46.649739257884775},
                { lat: -23.675988309829016, lng: -46.66023359711596},
                { lat: -23.66484812698164, lng: -46.678883750764804},
                { lat: -23.66353929884076, lng: -46.690137018880414},
                { lat: -23.66064207694469, lng: -46.694845241647336},
                { lat: -23.65844620277578, lng: -46.698472587023566},
                { lat: -23.661405850682048, lng: -46.706123367297366},
                { lat: -23.66570199448649, lng: -46.71202301523687},
                { lat: -23.666330731466864, lng: -46.71900639136125},
                { lat: -23.667184369108995, lng: -46.72659590594749},
                { lat: -23.663608340292846, lng: -46.726845785357725},
                { lat: -23.66263258392399, lng: -46.729343608907975}
			]

		   // Personalizar Ponto na mapa com imagem do Usuário.
			const icon = L.divIcon({
				className: "pointers",
				iconAnchor: [0, 24],
				labelAnchor: [-6, 0],
				popupAnchor: [0, -36],
				html: `<span style="${markerHtml}${myCustomColourUser}" />`
			})
			var newMarker2 = L.marker([coordUser2[0], coordUser2[1]], { icon }).addTo(map3);

			// Identifica a melhor rota para iniciar a viagem.
			L.Routing.control({
				waypoints: [
					L.latLng(coordTaxi2[0], coordTaxi2[1]),
					L.latLng(coordUser2[0], coordUser2[1])
				]
			}).on('routesfound', function (e) {
				// Loop de coordenadas. Simula o táxi enviando a localização para o APP.
				latlng.forEach(function (coord, index) {
					setTimeout(function () {
						marker2.setLatLng([coord.lat, coord.lng]);
						// Identifica o final da viagem.
						if (coord.lat === coordUser2[0] && coord.lng === coordUser2[1]) {
							//Fechando o popup atual e abrdo o de começar a corrida
                            const acompanharCorrida = document.getElementById('acompanhar-corrida')
                            alert('Corrida finalizada com sucesso! Agradecemos a preferência!');
                            setTimeout(function(){
                                acompanharCorrida.style.opacity = '0';
                                setTimeout(function(){
                                    acompanharCorrida.style.zIndex = '-99';
                                }, 500)
                            }, 500)

						}
					}, 1000 * index)
				})

			}).addTo(map3);
		};


	</script>
</section>


<section id="solicitar-corrida">
    <span class="fechar-modal" onclick='fecharModal();'>X</span>
    <div class="container-info-motorista">
        <img src="../assets/img/matheusA.jfif" alt="imagem do motorista" class='img-motorista'>

        <div class="corrida-info">
            <p class="nome-motorista">Matheus Abriz</p>
            <p class="carro-motorista">HB20 Branco</p>
            <p class="tempo-corrida"></p>
            <p class="distancia-corrida"></p>
        </div>

        <div class="container-preco">
            <p class="preco-corrida"></p>
            <span class='span-botao'><button onclick='aceitarCorrida()' class='botao-banner botao-aceitar'>Aceitar Corrida</button></span>
        </div>
    </div>
</section>

<section id="carregando-corrida">
    <h1 class='titulo-mapa titulo-motorista'>Procurando Motorista...</h1>
    <p class="cronometro-corrida"></p>
    <div class="carregando"></div>
</section>

<section id="comecar-corrida">
    <h1 class='titulo-motorista'>Sua carona chegou!</h1>
    <p class="texto-corrida">Por favor, confirme a chegada do motorista para começar a corrida</p>
    <span class='span-botao'><button onclick='comecarCorrida()' class='botao-banner botao-aceitar'>Começar Corrida</button></span>
</section>
<!--Footer-->
<?php require_once '../footer/footer.php'?>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
<script src="../assets/js/animacao.js"></script>
<script src="../assets/js/header.js"></script>
<script src="../assets/js/pedir-corrida.js"></script>
</body>
</html>