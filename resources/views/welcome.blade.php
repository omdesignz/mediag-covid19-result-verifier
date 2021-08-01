<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MEDIAG - Validação de Exames COVID-19</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="bg-white">
    <div class="bg-white">
        <header>
            <div class="relative bg-white">
            <div class="flex justify-between items-center max-w-7xl mx-auto px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="#">
                    <span class="sr-only">MEDIAG</span>
                    <img class="h-8 w-auto sm:h-10" src="/mediag_h.svg" alt="">
                </a>
                </div>
                
                <div class="md:flex items-center justify-end md:flex-1 lg:w-0">
                <a href="https://laboratoriomediag.com/" target="_blank" class="ml-8 whitespace-nowrap inline-flex items-center justify-center bg-gradient-to-r from-green-600 to-indigo-600 bg-origin-border px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white hover:from-purple-700 hover:to-indigo-700">
                    Visitar o site da Mediag
                </a>
                </div>
            </div>
        </header>
    </div>


    <main>
        <div class="relative">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
                    <div class="absolute inset-0">
                        <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2830&q=80&sat=-100" alt="People working on laptops">
                    <div class="absolute inset-0 bg-gradient-to-r from-green-800 to-indigo-700 mix-blend-multiply">
                    </div>
                </div>
                <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                    <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                    <span class="block text-white">Realizou o teste da COVID-19?</span>
                    <span class="block text-indigo-200">valide os seus resultados</span>
                    </h1>
                    <p class="mt-6 max-w-lg mx-auto text-center text-xl text-indigo-200 sm:max-w-3xl">
                    Apenas disponível para os exames realizados em uma das clínicas Mediag
                    </p>
                </div>
            </div>
            <br>
            <hr>
            <!-- <div
                x-data="apiData()"
                x-init="init()"
            >
                    <h1 x-text="lab"></h1>
                    <h1 x-text="patient"></h1>
                    <h1 x-text="analysis.RESULTADO"></h1>
                    
            </div> -->
        </div>

        
        <div class="bg-white shadow overflow-hidden sm:rounded-lg" x-data="apiData()"
                x-init="init()">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
      Certificado COVID-19
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
      Informações
    </p>
  </div>
  <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
    <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
      <div class="sm:col-span-1">
        <dt class="text-sm font-medium text-gray-500">
          Utente
        </dt>
        <dd class="mt-1 text-sm text-gray-900" x-text="patient">
          
        </dd>
      </div>
      <div class="sm:col-span-1">
        <dt class="text-sm font-medium text-gray-500">
          Documento de Identificação
        </dt>
        <dd class="mt-1 text-sm text-gray-900" x-text="passport">
          
        </dd>
      </div>
      <div class="sm:col-span-1">
        <dt class="text-sm font-medium text-gray-500">
          Análise
        </dt>
        <dd class="mt-1 text-sm text-gray-900" x-text="analysis.ANALISE">
          
        </dd>
      </div>
      <div class="sm:col-span-1">
        <dt class="text-sm font-medium text-gray-500">
          Amostra
        </dt>
        <dd class="mt-1 text-sm text-gray-900" x-text="analysis.DATA_COLHEITA">
          
        </dd>
        
        <dd class="mt-1 text-sm text-gray-900" x-text="sample">
          
        </dd>
      </div>
      <div class="sm:col-span-1">
        <dt class="text-sm font-medium text-gray-500">
          Método
        </dt>
        <dd class="mt-1 text-sm text-gray-900" x-text="analysis.METODO">
          
        </dd>
      </div>
      <div class="sm:col-span-1">
        <dt class="text-sm font-medium text-gray-500">
          Resultado
        </dt>
        <dd class="mt-1 text-sm text-gray-900" x-text="analysis.RESULTADO">
          
        </dd>
        <dd class="mt-1 text-sm text-gray-900" x-text="analysis.DATA_RESULTADO">
          
        </dd>
      </div>
      <div class="sm:col-span-2">
        <dt class="text-sm font-medium text-gray-500">
          Laboratório
        </dt>
        <dd class="mt-1 text-sm text-gray-900" x-text="lab">
          
        </dd>
      </div>
      <div class="sm:col-span-2">
        <dt class="text-sm font-medium text-gray-500">
          Documento
        </dt>
        <dd class="mt-1 text-sm text-gray-900">
          <ul class="border border-gray-200 rounded-md divide-y divide-gray-200">
            <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">
              <div class="w-0 flex-1 flex items-center">
                <!-- Heroicon name: solid/paper-clip -->
                <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                </svg>
                <span class="ml-2 flex-1 w-0 truncate">
                  certificado
                </span>
              </div>
              <div class="ml-4 flex-shrink-0">
                <a x-bind:href="pdf_link" class="font-medium text-indigo-600 hover:text-indigo-500">
                  Descarregar
                </a>
              </div>
            </li>
          </ul>
        </dd>
      </div>
    </dl>
  </div>
</div>
        
    </main>

    


  <footer class="bg-white" aria-labelledby="footerHeading">
    <h2 id="footerHeading" class="sr-only">Footer</h2>
    <div class="max-w-7xl mx-auto pt-16 pb-8 px-4 sm:px-6 lg:pt-24 lg:px-8">
      <div class="xl:grid xl:grid-cols-3 xl:gap-8">
        
      </div>
      <div class="mt-12 border-t border-gray-200 pt-8 md:flex md:items-center md:justify-between lg:mt-16">
        <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
          &copy; 2021 GESTLAB. Todos os direitos reservados.
        </p>
      </div>
    </div>
  </footer>
</div>
<!-- <script type="module" src="{{ asset('/js/app.js') }}" defer></script> -->
<script>
  function apiData() {
  return {
    p1: new URLSearchParams(location.search).get('p1'),
    p2: new URLSearchParams(location.search).get('p2'),
    p3: new URLSearchParams(location.search).get('p3'),
    p4: new URLSearchParams(location.search).get('p4'),
    p5: new URLSearchParams(location.search).get('p5'),
    p7: new URLSearchParams(location.search).get('p7'),
    p8: new URLSearchParams(location.search).get('p8'),

    pdf_link: null,

    passport: null,
    patient: null,
    lab: null,
    sns: null,
    card_no: null,
    nif: null,
    sample: null,
    episode: null,
    analysis: [],
    init() {  
      const queryString = window.location.search;
      const urlParams = new URLSearchParams(queryString);

      // get gists and parse the description field
      fetch('https://apis.laboratoriomediag.co.ao/ws_resultados/ws_covid_resultados.exe/getresults?' + 'p1=' + this.p1 + '&p2='+ this.p2 + '&p3='+ this.p3 + '&p4=' + this.p4 + '&p5=' + this.p5 + '&p7=' + this.p7 + '&p8=' + this.p8)
        .then(response => response.json())
        .then(response => {
          // console.log(response);
        
          this.passport = response.PASSAPORTE;
          this.patient = response.NOME_UTENTE;
          this.lab = response.DSG_LABORATORIO;
          this.sns = response.SNS_UTENTE;
          this.card_no = response.CARTAO_CIDADAO_UTENTE;
          this.nif = response.NIF_UTENTE;
          this.sample = response.AMOSTRA;
          this.analysis = response.ANALISES[0];
          this.episode = response.CHV_EPISODIO;

          this.pdf_link = 'https://apis.laboratoriomediag.co.ao/ws_resultados/ws_covid_resultados.exe/getpdf?' + 'p1=' + this.p1 + '&p2='+ this.p2 + '&p3='+ this.p3 + '&p4=' + this.p4 + '&p5=' + this.p5 + '&p7=' + this.p7 + '&p8=' + this.p8 + '&mtd=pdf';
         
      });
    }
  };
}
</script>
    </body>
</html>
