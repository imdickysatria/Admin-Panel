<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    @vite('resources/css/app.css')

    <style>
        * {
          box-sizing: border-box;
        }

        /* Create two equal columns that floats next to each other */
        .column {
          float: left;
          width: 50%;
          padding: 10px;

        }

        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        </style>
</head>
<body>
    @vite("resources/js/app.js")


        <nav class="bg-yellow-300 border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center">
                <img src="https://gas.id/files/images/srvphp_1662943062.png" class="h-8 mr-3" alt="gas" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">GAS</span>
            </a>
            <div class="flex items-center md:order-2">
                <button type="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 sm:w-auto dark:bg-yellow-300 dark:hover:bg-yellow-400 dark:focus:ring-yellow-400">Sign In</button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-yellow-300 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-white md:p-0 md:dark:text-white" aria-current="page">Beranda</a>
                </li>
                <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang Gas</a>
                </li>
                <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Fitur</a>
                </li>
                <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Daftar</a>
                </li>
                <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-white md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Karir</a>
            </ul>
            </div>
            </div>
        </nav>

        <div class="content bg-indigo-200">
            <div class="banner bg-yellow-300">
                <div class="row">
                    <div class="column">
                        <div class="wrap mt-24 ml-20">
                            <h1 class="text-4xl font-bold text-white" style="width:200px">{{$banner->title}}</h1>
                            <p style="width:420px">{{$banner->desc}}</p>
                            <br>
                            <p>unduh</p>
                            <div class="google-play mb-20">
                                <img src="https://gas.id/assets/play_store.png" alt="">
                            </div>

                            <div class="sosmed flex mt-11">
                                @foreach ($sosmed as $row)
                                <img src="{{$row->logo}}" alt="" height="30px" width="30px">
                                @endforeach

                            </div>
                        </div>

                    </div>
                    <div class="column">
                        <div style="max-height: 450px; max-width: 450px; overflow:hidden;" class="mt-10">
                            <img src="{{$banner->banner}}"
                            alt="" class="img-fluid mt-3">
                        </div>
                    </div>
                  </div>
            </div>

            <div class="popular-fitur mt-32 text-center">
                <h3 class="text-3xl font-bold">Popular Fitur</h3>
                <p>Nikmati berbagai fitur yang kami berikan</p>
                <div class="menu flex content-center mt-10 ml-32">
                    @foreach ($populars as $row )
                        <div class="mr-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="width:200px;">
                            <a href="#">
                                <img class="rounded-t-lg" src="{{$row->image}}" alt="" height="300px" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <p class=" text-xs text-gray-900 dark:text-white">{{$row->title}}</p>
                                </a>
                            </div>
                    </div>
                    @endforeach
                </div>
            </div>


            <div class="kategori-toko mt-32 text-center">
                <h3 class="text-3xl font-bold">Kategori Toko</h3>
                <p>Apapun Jenis tokomu dapat bergabung bersama GAS</p>

                <div class="cards-toko flex content-center mt-10 ml-10">
                    @foreach ($kategories as $row)
                    <div class="mr-5 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" style="width:300px;">
                        <a href="#">
                            <img class="rounded-t-lg" src="{{$row->image}}" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$row->title}}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$row->desc}}</p>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>

            <div class="map mt-32 text-center">
                <h3 class="text-3xl font-bold">Fitur Maps</h3>
                <p>Aplikasi Gas akan membantumu dalam memantau stok produk tokomu dan menjangkau customer yang lebih luas</p>
                <div class="peta" style="margin-left:30%;">
                    <img src="{{$map->map}}"
                    alt="" class="img-fluid mt-3">
                </div>
            </div>


            <div class="iklan mt-32">
                @foreach ($iklan as $row)
                <div class="peta" style="margin-left:25%;">
                    <a href="">
                        <img src="{{$row->iklan}}"
                    alt="" class="img-fluid mt-3">
                    </a>

                </div>
                @endforeach
            </div>

            <div class="tentang-kami mt-32 text-center">
                <h3 class="text-3xl font-bold">Tentang Kami</h3>
                <p>Gas adalah aplikasi untuk memudahkan pelaku usaha menjangkau calin pembeli lebih luas melalui gerakan Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum, sunt!</p>
                <div class="sosmed flex"  style="margin-left:48%;">
                    @foreach ($sosmed as $row)
                        <a href="">
                            <img src="{{$row->logo}}" alt="" height="30px" width="30px">
                        </a>
                    @endforeach

                </div>
            </div>
            <div class="karier mt-32">
                <h3 class="text-3xl font-bold text-center">Temukan Karier Impianmu</h3>
                <p class="text-center">Mari bergabung bersama kami jadilah bagian dari kami dan kembangkan bakat, ide kreatifmu dalam GAS</p>
                <div class="row-karier mb-5" style="margin-left:28%">
                    @foreach ($karier as $row)
                    <div class="column-karier mb-4">
                        <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{$row->image}}" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$row->title}}</h5>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$row->desc}}</p>

                            </div>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                        </a>
                    </div>
                    @endforeach


                </div>


            </div>
        </div>


        <footer class="bg-gray-700 text-center font-bold text-white" style="margin-top:-20px">
            <h1>Riyan Dicky Satria</h1>
            <p>07/05/2023</p>
            <p>test PT Daya Rekadigital Indonesia</p>
        </footer>



</body>
</html>
