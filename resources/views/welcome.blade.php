<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agenda Digital</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
    <img style="height:40px; width:175px;" src="{{ asset('img/logo AEC.png') }}" alt="usuario"/>
    </a>
    <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
      <a href="https://aecreativo.net/" target="_blank" class="mr-5 text-amber-500 hover:text-amber-400">Visítanos</a>
    </nav>
    <button class="bg-rose-600 inline-flex items-center border-0 py-1 px-3 focus:outline-none hover:bg-rose-500 rounded text-base mt-4 md:mt-0"> <path d="M5 12h14M12 5l7 7-7 7"> @if (Route::has('login'))
             
                    @auth
                        <a href="{{ url('/home') }}" class=" text-md text-white uppercase">Ir a la Agenda</a>
                    @else
                        <a href="{{ route('login') }}" class="text-md text-white">Iniciar Sesion |</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-md text-white">Registrarse</a>
                        @endif
                    @endauth 
            @endif</path>
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
       
      </svg>
    </button>
  </div>
</header>

<section class="text-gray-600 body-font">
  <div class="container px-5 mx-auto flex flex-wrap">
  <div class="container px-5 mx-auto">
    <div class="flex flex-col text-center w-full mb-10">
      <h2 class="text-sm text-rose-700 tracking-widest font-bold title-font mb-1">AE Creativo -- Servicios</h2>
      <h1 class="sm:text-3xl md:text-4xl font-bold mb-2 text-amber-400">Conoce acerca de nosotros</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Somos AE Creativo, una empresa especializada en sistemas webs, manejo de redes sociales y diseño grafico.</p>
    </div>
    <div class="flex flex-wrap md:-m-2 -m-1">
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-1/2">
            <a href="#" target="_blank" rel="noopener noreferrer">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/500x300">
          </a>
        </div>
        <div class="md:p-2 p-1 w-1/2">
            <a href="http://aecreativo.net/paginas-web" target="_blank" rel="noopener noreferrer">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{ asset('img/paginas.jpg') }}">
          </a>
        </div>
        <div class="md:p-2 p-1 w-full">
            <a href="http://agenda.aecreativo.net" target="_blank" rel="noopener noreferrer">
          <img alt="gallery" class="w-full h-full object-cover object-center block" src="{{ asset('img/agenda.jpg') }}">
          </a>
        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-full">
            <a href="http://qrsimple.aecreativo.net" target="_blank" rel="noopener noreferrer">
          <img alt="gallery" class="w-full h-full object-cover object-center block" src="{{ asset('img/menu.jpg') }}">
          </a>
        </div>
        <div class="md:p-2 p-1 w-1/2">
            <a href="http://aecreativo.net/diseno-grafico" target="_blank" rel="noopener noreferrer">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{ asset('img/identidad.jpg') }}">
          </a>
        </div>
        <div class="md:p-2 p-1 w-1/2">
            <a href="#" target="_blank" rel="noopener noreferrer">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="https://dummyimage.com/503x303">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
GitHub
    </body>
</html>
