@extends('layout-front.main')
@section('front')

<div class="banner bg-yellow-300">
    <div class="row">
        <div class="column">
            @if (isset($banner) == null)
                <div class="wrap mt-24 ml-20">
                    <h1 class="text-4xl font-bold text-white" style="width:200px">Tidak tersedia</h1>
                    <p style="width:420px">Tidak tersedia</p>
                    <br>
                    <p>unduh</p>
                    <div class="google-play mb-20">
                        <img src="https://gas.id/assets/play_store.png" alt="">
                    </div>

                    <div class="sosmed flex mt-11">
                        <img src="https://png.pngtree.com/png-vector/20200724/ourlarge/pngtree-hand-drawn-cute-cartoon-signage-sign-simple-illustration-image-cross-sign-png-image_2312556.jpg"
                        alt="" height="30px" width="30px">
                    </div>
                </div>
            @else
                <div class="wrap mt-24 ml-20">
                    <h1 class="text-4xl font-bold text-white" style="width:250px">{{$banner->title}}</h1>
                    <p class="mt-4" style="width:420px">{{$banner->desc}}</p>
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
                @endif
        </div>
        <div class="column">
            @if (isset($banner) == null)
            <div style="max-height: 450px; max-width: 450px; overflow:hidden;" class="mt-10">
                <img src="https://png.pngtree.com/png-vector/20200724/ourlarge/pngtree-hand-drawn-cute-cartoon-signage-sign-simple-illustration-image-cross-sign-png-image_2312556.jpg"
                alt="" class="img-fluid mt-3">
            </div>
            @else
            <div style="max-height: 450px; max-width: 450px; overflow:hidden;" class="mt-10">
                <img src="{{$banner->banner}}"
                alt="" class="img-fluid mt-3">
            </div>
            @endif
        </div>
      </div>
</div>

<div class="popular-fitur mt-32 text-center">
    <h3 class="text-3xl font-bold">Popular Fitur</h3>
    <p class="mt-5">Nikmati berbagai fitur yang kami berikan</p>
    @if (count($populars) == 0)
    <p>Fitur tidak tersedia</p>
    @else
    <div class="menu flex content-center mt-10 justify-center">
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
    @endif
</div>


<div class="kategori-toko mt-32 text-center">
    <h3 class="text-3xl font-bold">Kategori Toko</h3>
    <p class="mt-5">Apapun Jenis tokomu dapat bergabung bersama GAS</p>

    @if (count($kategories) == 0)
    <p>FItur tidak tersedia</p>
    @else
        <div class="cards-toko flex content-center mt-10 justify-center">
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
    @endif
</div>

<div class="map mt-32 text-center">
    <h3 class="text-3xl font-bold">Fitur Maps</h3>
    <p class="mt-5">Aplikasi Gas akan membantumu dalam memantau stok produk tokomu dan menjangkau customer yang lebih luas</p>
    @if (isset($map) == null)
        <p>Fitur Tidak Tersedia</p>
    @else
    <div class="peta flex justify-center">
        <img src="{{$map->map}}"
        alt="" class="img-fluid mt-3">
    </div>
    @endif
</div>


@if (isset($iklan) != null)
<div class="iklan mt-32">
    @foreach ($iklan as $row)
    <div class="peta flex justify-center">
        <a href="">
            <img src="{{$row->iklan}}"
        alt="" class="img-fluid mt-3">
        </a>

    </div>
    @endforeach
</div>
@endif

@if (isset($tentang) != null)
<div class="tentang-kami mt-32 text-center">
    <h3 class="text-3xl font-bold">{{$tentang->title}}</h3>
    <p class="w-4/5 ml-28 mt-5" >{{$tentang->desc}}</p>
    <div class="sosmed flex justify-center mt-5">
        @foreach ($sosmed as $row)
            <a href="">
                <img src="{{$row->logo}}" alt="" height="30px" width="30px">
            </a>
        @endforeach
    </div>
</div>
@endif

<div class="karier mt-32">
    <h3 class="text-3xl font-bold text-center">Temukan Karier Impianmu</h3>
    <p class="text-center mt-5 mb-4">Mari bergabung bersama kami jadilah bagian dari kami dan kembangkan bakat, ide kreatifmu dalam GAS</p>
    @if (count($karier) != 0)
    <div class="row-karier mb-5 grid grid-flow-row-dense grid-cols-2 ml-16">
            @foreach ($karier as $row)
            <div class="column-karier col-md-6 mb-3">
                <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="{{$row->image}}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$row->title}}</h5>
                        <p class="mb-3 text-sm text-gray-700 dark:text-gray-400">{{$row->desc}}</p>
                    </div>
                </a>
            </div>
            @endforeach
    </div>

    @else
        <p class="text-center">Fitur Tidak Tersedia</p>
    @endif
</div>

@endsection
