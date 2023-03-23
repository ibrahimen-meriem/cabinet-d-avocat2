@extends("./resource/index")
@section("content")
    <div class="container-fluid " style='background-image: url({{url("./images/icon/istockphoto-1143525474-170667a.jpg")}});background-repeat: no-repeat;
background-size: cover ; height: 700px ; width: 700px ; border: 3px #FFD700 solid '>
        <div class="row d-flex justify-content-around">
            <div class="col-auto" style="margin-top: 30px">
                <img src="{{url("./images/icon/$user->photo")}}" style="width: 150px;height: 150px;border-radius: 50%;"/>
            </div>
            <div class="col-auto" style="margin-top: 50px ; color:#FFD700">
                <p>{{$user->userName}}</p>
                <p>{{$user->nom}}  {{$user->prenom}}</p>

                <p> <img src="{{url("./images/icon/stock-vector-black-telephone-auricular-gold-plated.jpg")}}" style="width: 30px;height: 30px"/>0974829438092</p>
            </div>
        </div>
        <div class="row d-flex justify-content-start">
            <div class="col-auto " style="width: 150px; color:#FFD700; margin-left: 90px">
                <h3>{{$user->role}}</h3>
                <P>@if($user->admin) Admin @endif</P>
            </div>
        </div>
        <div class="row  m-5  " id="row" style="color:#FFD700; ">
            <div class="col d-flex justify-content-center "  >
                <div class="  p-3  text-center fw-bold" style=" height: 120px;border:2px #FFD700 solid ; width: 100px ;background:black">
                    <div class=" fs-3" >
                        <span>7</span>
                    </div>
                    <span>les-affaires </span>
                </div>
            </div>
            <div class="col d-flex justify-content-center "  >
                <div class="  p-3   text-center fw-bold" style=" height: 120px ;border:2px #FFD700 solid; width: 100px ;background:black">
                    <div class=" fs-3" >
                        <span>20</span>
                    </div>
                    <span>les-clients </span>
                </div>
            </div>
            <div class="col d-flex justify-content-center "  >
                <div class="  p-3   text-center fw-bold" style=" height: 120px ; border:2px #FFD700 solid;width: 100px ;background:black">
                    <div class=" fs-3" >
                        <span>17</span>
                    </div>
                    <span>les-taches </span>
                </div>
            </div>

        </div>
        <div class="row d-flex justify-content-end" style="margin-top: 100px">
            <div class="col-4">
                <a href="{{route("user.edit",["id"=>$user->id])}}"> <button type="button" class="btn " style="background:black; width: 150px; color:#FFD700; border:2px #FFD700 solid;
            border-radius:20px; ">Modifier</button> </a>
            </div>
            <div class="col-4">
                <a onclick="return confirm('Are you sure, you want to delete it?')" href="{{route("user.destroy",["id"=>$user->id])}}">
                    <button type="button" class="btn " style="background:black; width: 150px;color:#FFD700; border:2px #FFD700 solid;
            border-radius:20px; ">suprimer</button>
                </a>
            </div>
        </div>
    </div>

    </div>
@endsection
@section("titre","Nom de User")
@section("users","text-white border-bottom ")
