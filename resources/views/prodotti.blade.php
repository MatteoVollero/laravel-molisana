@extends('layout.layout')

@section('title')
    Prodotti
@endsection


@section('mainContent')

<div class="main">

  <img class="sfondo" src="{{asset("images/sfondo.jpg")}}" alt="">

  <div class="absolute-container">
    <div class="container">

      <h1>Lunga</h1>

      <ul class="flex-list">

        @foreach ($paste["lunga"] as $item)

            <li>

              <div class="hover">
                <a href="{{route("dettaglioProdotto",$item["id"])}}"></a>
                 <h3>{{$item["titolo"]}}</h3> 
                <img src="{{$item["src"]}}" alt="">
              </div>

            </li>

        @endforeach

      </ul>

    </div>
  </div>
</div>


{{-- <h1>Lunga</h1>
  @if (!empty($paste["lunga"]))
    <ul class="flex-rules">
      @foreach ($paste["lunga"] as $item)

          <li>

            <a href="{{route("dettaglioProdotto",$item["id"])}}"> <h3>{{$item["titolo"]}}</h3> </a>
            <img src="{{$item["src"]}}" alt="">

          </li>

      @endforeach
    </ul>

  @endif





  <h1>Corta</h1>
    <div class="flex-roules">
      @if (!empty($paste["corta"]))
        <ul>
          @foreach ($paste["corta"] as $item)

              <li>

                <a href="prodotti/show/{{$item["id"]}}"> <h3>{{$item["titolo"]}}</h3> </a>
                <img src="{{$item["src"]}}" alt="">

              </li>

          @endforeach
        </ul>

      @endif
    </div>

    <h1>Cortissima</h1>

    <div class="flex-roules">
      @if (!empty($paste["cortissima"]))
        <ul>
          @foreach ($paste["cortissima"] as $item)

              <li>

                <a href="prodotti/show/{{$item["id"]}}"> <h3>{{$item["titolo"]}}</h3> </a>
                <img src="{{$item["src"]}}" alt="">

              </li>

          @endforeach
        </ul>

      @endif
    </div>

  </div>
</div> --}}


@endsection
