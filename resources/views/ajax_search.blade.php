<table class="table mt-4"  style="background-color: rgb(122, 108, 33);">
    <thead>
    <tr>
        <th scope="col">Code</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">ACTIVE</th>
        <th scope="col"> actions</th>
    </tr>
    </thead>
    <tbody>
    @if(!@empty($data))
        @foreach($data as $info)
            <tr>

                <td>{{$info->id}}</td>
                <td>{{$info->nom}}</td>
                <td>{{$info->prenom}}</td>
                <td>@if($info->active==1) Active @else not active @endif</td>

                <td>
                    <a href="{{route('edit-clients', $info->id)}}" class="btn " style="background: gold">
                        <img  style="width: 20px;height: 20px" src="./icon/update-12.png"/></a>
                    <a href="{{route('delet-clients', $info->id)}}" onclick="return confirm('are you sur you want delete this client')" class=" btn" style="background: gold">
                        <img  style="width: 20px;height: 20px" src="./icon/1345874.png"/></a>

                </td>

            </tr>
        @endforeach
    @endif
    </tbody>
</table>
