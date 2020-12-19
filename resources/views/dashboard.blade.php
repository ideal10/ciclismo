<x-app-layout>
    <x-slot name="title">
        {{ __('Bienvenido') }}
    </x-slot>
    
    <x-slot name="header">
        <h2 class="text-white font-semibold text-xl leading-tight">
            {{ __('Bienvenido, ').auth()->user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

            <script>
                var cont=0;
                function loopSlider()
                {
                    var xx = setInterval(function(){
                        switch(cont){
                            case 0:{
                                $("#slider-1").fadeOut(400);
                                $("#slider-2").delay(400).fadeIn(400);
                                $("#sButton1").removeClass("bg-purple-800");
                                $("#sButton2").addClass("bg-purple-800");
                                cont=1;
                                break;
                            }
                            case 1:{
                            
                                $("#slider-2").fadeOut(400);
                                $("#slider-1").delay(400).fadeIn(400);
                                $("#sButton2").removeClass("bg-purple-800");
                                $("#sButton1").addClass("bg-purple-800");
                                cont=0;
                                break;
                            }
                        }
                    }, 8000);
                }

                function reinitLoop(time)
                {
                    clearInterval(xx);
                    setTimeout(loopSlider(),time);
                }

                function sliderButton1()
                {
                    $("#slider-2").fadeOut(400);
                    $("#slider-1").delay(400).fadeIn(400);
                    $("#sButton2").removeClass("bg-purple-800");
                    $("#sButton1").addClass("bg-purple-800");
                    reinitLoop(4000);
                    cont = 0;
                }
            
                function sliderButton2()
                {
                    $("#slider-1").fadeOut(400);
                    $("#slider-2").delay(400).fadeIn(400);
                    $("#sButton1").removeClass("bg-purple-800");
                    $("#sButton2").addClass("bg-purple-800");
                    reinitLoop(4000);
                    cont = 1;
                }

                $(window).ready(function(){
                    $("#slider-2").hide();
                    $("#sButton1").addClass("bg-purple-800");
                    loopSlider();
                });
            </script>  

            <div>
                <div id="slider-1">
                    <img class="mx-auto" style="width:500px;height:300px;" src="https://www.eltiempo.com/uploads/2019/08/06/5d49be56a2878.jpeg" alt="Ciclista 1">   
                </div>
                <div id="slider-2" class="flex">
                    <img class="mx-auto" style="width:500px;height:300px;" src="https://dosdelfines.es/wp-content/uploads/2018/11/1.-bicicleta-carreras.jpg" alt="Ciclista 2">
                </div>
            </div>
            <div class="flex justify-between w-12 mx-auto my-3">
                <button id="sButton1" onclick="sliderButton1()" class="bg-purple-400 rounded-full w-4 h-4"></button>
                <button id="sButton2" onclick="sliderButton2()" class="bg-purple-400 rounded-full w-4 h-4"></button>
            </div>
</x-app-layout>
