@extends('layout.default')
@section('title', 'JendelaFilm')

@section('styles')
@endsection

@section('page-css')

@endsection

@section('content')
    <div class="row">
        <div class="col-md-12"> JendelaFilm 
        </div>
        <div class="col-md-12">
            <div class="col-md-10 card-block">
                STANDARD
                <a href="{{url('/welcome')}}">
                        Back
                </a>     
            </div>
        </div>
        <div class="col-md-12">
            <form id="search-form" action="{{url('/standard')}}" method="get">
                <input type="text" name="search" id="judul" size="18" value="">

                {{-- <input type="hidden" id="tender" name="tender" value="{{$filter->tender}}">
                <input type="hidden" id="daterange" name="daterange" value="{{$filter->daterange}}"> --}}
                <button type="submit" value="Search" onclick="load()">Search</button>
            </form>
        </div>
        <div id="container1" style="display:block">
            satu
            {{-- <script>
                fetch('mydata.json')
                  .then(function (response) {
                    return response.json();
                  })
                  .then(function (data) {
                    appendData(data);
                  })
                  .catch(function (err) {
                    console.log(err);
                  });

                function appendData(data) {
                  var mainContainer = document.getElementById("container1");
                  for (var i = 0; i < data.length; i++) {
                    var div = document.createElement("div");
                    dd(div)
                    div.innerHTML = 'Name: ' + data[i].value + ' ' + data[i].type;
                    mainContainer.appendChild(div);
                  }
                }
                </script> --}}
            <div class="liveSample" spry:region="film">
            <ul>
                <li spry:repeat="film">{value} ({lang})</li>
            </ul>
            </div>
        </div>
        <div id="container2" style="display:none">
            dua
        </div>
    </div>



@endsection

@section('scripts')
<script {{-- src="mydata.json" --}}>
function load() {
    var x = document.getElementById('container1');
    var y = document.getElementById('container2');
        if (x.style.display == "block") { 
            x.style.display = "none"; 
            y.style.display = "block"; 
        }
        else {
            x.style.display = "block";  //Show Div
            y.style.display = "none";  //Hide div
        }   
}
</script>

<script type="text/javascript">
    var film = new Spry.Data.JSONDataSet("mydata.json", {path: "rdf.title"});


</script>


      
@endsection