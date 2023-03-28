@extends('layouts.app')

@section('content')
<div>
    <div>
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        @if(Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error ') }}
            </div>
        @endif
        <form class="form-inline">
            <div class="row p-0  d-flex justify-content-between">
                <div class="col-6 row  d-flex justify-content-between" >
                    <div class="col-3 ">
                        <a href="{{route('create-affaires')}}" class="btn mx-3 w-75" style="background: gold">Ajouter</a>
                    </div>
                    <div class="col col-4">
                        <select class="form-select text-white col-6" style="background: goldenrod">
                            <option hidden  selected>filtrer par type</option>
                            <option>option 1</option>
                            <option>option 2</option>
                        </select>
                    </div>
                    <div class="col col-4">
                        <select class="form-select text-white col-6" style="background: goldenrod">
                            <option hidden  selected>filtrer par etat </option>
                            <option>option 1</option>
                            <option>option 2</option>
                        </select>
                    </div>
                </div>
                <div class="col-6 ">

                    <div class="input-group d-flex justify-content-end">

                        <div class="form-outline border-primary">
                            <input class="form-control w-100" type="search" name="search" id="search" placeholder="Recherche..." />
                        </div>
                        <button type="button" class="btn"style="background: gold">
                            <img src="images/icon/56936.png" alt="search" style="width: 20px">
                        </button>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <div  class="mt-4 d-flex justify-content-between">
        <table class="table " style="background:#7A6C21; border: 2px #EED758 solid   ">
            <thead style=" border: 2px #EED758 solid">
            <tr>
                <th scope="col">Numero d'affaire</th>
                <th scope="col">Nom</th>
                <th scope="col">Client </th>
                <th scope="col">Avocat </th>
                <th scope="col">Etat</th>
                <th scope="col">Type</th>

                <th scope="col">les actions</th>


            </tr>
            </thead>
            <tbody>
            @if(!@empty($data))
                @foreach($data as $info)
            <tr>
                <th scope="row">{{$info->id}}</th>
                <td>{{$info->nameAffaire}}</td>
                <td>{{$info->nameUser}}</td>
                <td>{{$info->nameClient}} </td>
                <td>{{$info->etat}}</td>
                <td>{{$info->type}}</td>

                <td>
                    <a href="" class="btn " style="background: gold">
                        <img  style="width: 20px;height: 20px" src="{{url("./images/icon/1159633.png")}}"/></a>
                    <a href="" onclick="return confirm('are you sur you want delete this client')" class=" btn" style="background: gold">
                        <img  style="width: 20px;height: 20px" src="{{url("./images/icon/1345874.png")}}"/></a>
                    <a href=""  class=" btn" style="background: gold">
                        <img  style="width: 20px;height: 20px" src="{{url("./images/icon/user-profile-icon.webp")}}"/></a>
                </td>

            </tr>

                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
@section("titre","Affaires")
@section("Affairs","text-white border-bottom ")
