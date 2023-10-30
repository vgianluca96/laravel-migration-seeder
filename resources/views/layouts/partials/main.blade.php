<main>
    <div class="container py-4">
        <table class="table table-light table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Azienda</th>
                <th scope="col">Stazione di partenza</th>
                <th scope="col">Stazione di arrivo</th>
                <th scope="col">Orario di partenza</th>
                <th scope="col">Orario di arrivo</th>
                <th scope="col">Codice treno</th>
                <th scope="col">Numero carrozze</th>
                <th scope="col">In orario</th>
                <th scope="col">Cancellato</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <th scope="row">{{$train->id}}</th>
                        <td>{{$train->company}}</td>
                        <td>{{$train->departure_station}}</td>
                        <td>{{$train->arrival_station}}</td>
                        <td>{{$train->departure_hour}}</td>
                        <td>{{$train->arrival_hour}}</td>
                        <td>{{$train->train_code}}</td>
                        <td>{{$train->wagons_num}}</td>
                        <td>{{$train->on_time}}</td>
                        <td>{{$train->canceled}}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</main>