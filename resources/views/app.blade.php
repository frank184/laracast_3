<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body class="font-sans">
        <div id="app">
          
          <header class="py-6 px-8 mb-8" style="background: url('/images/splash.svg') 0 15px no-repeat">
            <h1>
              <img alt="Laracasts 3" src="/images/logo.svg">
            </h1>
          </header>
          
          <div class="container-920px px-8 pb-10">
            <main class="flex">
              <aside class="w-64 pt-8">
                <section class="mb-10">
                  <h5 class="uppercase bold mb-5 text-base">The Brand</h5>
                  
                  <ul class="list-reset">
                    <li class="text-sm leading-loose">
                      <router-link to="/" class="text-black" exact>Logo</router-link>
                    </li>
                    <li class="text-sm leading-loose">
                      <router-link to="/logo-symbol" class="text-black">Logo Symbol</router-link>
                    </li>
                    <li class="text-sm leading-loose">
                      <router-link to="/colors" class="text-black">Colors</router-link>
                    </li>
                    <li class="text-sm leading-loose">
                      <router-link to="/typography" class="text-black">Typography</router-link>
                    </li>
                  </ul>
                </section>
                
                <section class="mb-10">
                  <h5 class="uppercase bold mb-5 text-base">Doodles</h5>
                  
                  <ul class="list-reset">
                    <li class="text-sm leading-loose">
                      <router-link to="/mascot" class="text-black">Mascot</router-link>
                    </li>
                    <li class="text-sm leading-loose">
                      <router-link to="/illustrations" class="text-black">Illustrations</router-link>
                    </li>
                    <li class="text-sm leading-loose">
                      <router-link to="/loaders-and-animations" class="text-black">Loaders & Animations</router-link>
                    </li>
                    <li class="text-sm leading-loose">
                      <router-link to="/wallpapers" class="text-black">Wallpapers</router-link>
                    </li>
                  </ul>
                </section>
                
                <section class="mb-10">
                  <h5 class="uppercase bold mb-5 text-base">Stats</h5>
                  
                  <ul class="list-reset">
                    <li class="text-sm leading-loose">
                      <router-link to="/stats" class="text-black">Site Stats</router-link>
                    </li>
                    <li class="text-sm leading-loose">
                      <router-link to="/achievements" class="text-black">Your Achievements</router-link>
                    </li>
                  </ul>
                </section>
              </aside>
              
              <div class="primary flex-1">
                <router-view></router-view>
              </div>
            </main>
          </div>
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>
