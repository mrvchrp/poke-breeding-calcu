<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokemmo Breeding Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body style="height: 100vh">
    <div class="container text-center bg-dark h-100">
        <div class="row mb-3">
          <div class="col-12">
            <h1 class="text-white">Pokemmo Breeding Calculator</h1>
          </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <div class="card">
                    <img src="{{asset('images/everstone.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Everstone</h5>
                      <input class="btn btn-primary" id="everstone" type="button" value="Add">
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('images/power-weight.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Power Weight</h5>
                      <input class="btn btn-primary" id="powerweight"  type="button" value="Add">
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('images/power-bracer.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Power Bracer</h5>
                      <a href="#" class="btn btn-primary" id="powerbracer" >Add</a>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('images/power-belt.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Power Belt</h5>
                      <a href="#" class="btn btn-primary" id="powerbelt" >Add</a>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('images/power-lens.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Power Lens</h5>
                      <a href="#" class="btn btn-primary" id="powerlens" >Add</a>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('images/power-band.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Power Band</h5>
                      <a href="#" class="btn btn-primary" id="powerband" >Add</a>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{asset('images/power-anklet.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Power Anklet</h5>
                      <a href="#" class="btn btn-primary" id="poweranklet" >Add</a>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 mt-5 text-center">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Total</h5>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">$</span>
                        <input type="number" class="form-control text-end" id="total" placeholder="Total" aria-describedby="basic-addon1" readonly>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col mt-5">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">$</span>
                    <input type="number" class="form-control text-end" id="pokemon" placeholder="Pokemon" aria-describedby="basic-addon1">
                    <a href="#" class="btn btn-primary" id="addPokemonBtn" >Add</a>
                  </div>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">$</span>
                    <input type="number" class="form-control text-end" id="pokemonBreed21K" placeholder="21000" aria-describedby="basic-addon1" value="21000" readonly>
                    <a href="#" class="btn btn-primary" id="pokemonBreed21KBtn" >Add</a>
                  </div>
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">$</span>
                    <input type="number" class="form-control text-end" id="pokemonBreed5k" placeholder="5000" aria-describedby="basic-addon1" value="5000" readonly>
                    <a href="#" class="btn btn-primary" id="pokemonBreed5kBtn" >Add</a>
                  </div>
            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
          // Initialize total variable
          var total = 0;

          // Click event for the Add 5000 button
          $("#everstone").click(function() {
            // Increment total by 5000
            total += 5200;

            // Update the value of the Total input
            $("#total").val(total);
          });

          // Click event for the Add 10000 button
          $("#powerweight").click(function() {
            // Increment total by 5000
            total += 10000;

            // Update the value of the Total input
            $("#total").val(total);
          });

          // Click event for the Add 10000 button
          $("#powerbracer").click(function() {
            // Increment total by 5000
            total += 10000;

            // Update the value of the Total input
            $("#total").val(total);
          });

          // Click event for the Add 10000 button
          $("#powerbelt").click(function() {
            // Increment total by 5000
            total += 10000;

            // Update the value of the Total input
            $("#total").val(total);
          });

          // Click event for the Add 10000 button
          $("#powerlens").click(function() {
            // Increment total by 5000
            total += 10000;

            // Update the value of the Total input
            $("#total").val(total);
          });

          // Click event for the Add 10000 button
          $("#powerband").click(function() {
            // Increment total by 5000
            total += 10000;

            // Update the value of the Total input
            $("#total").val(total);
          });

          // Click event for the Add 10000 button
          $("#poweranklet").click(function() {
            // Increment total by 5000
            total += 10000;

            // Update the value of the Total input
            $("#total").val(total);
          });

          $("#addPokemonBtn").click(function() {
            // Get the value of the Pokemon input
            var pokemonPrice = $("#pokemon").val();
            pokemonPrice = parseFloat(pokemonPrice);
            total += pokemonPrice;

            $("#total").val(total);
          });

          $("#pokemonBreed21KBtn").click(function() {
            // Get the value of the Pokemon input
            var pokemonPrice = $("#pokemonBreed21K").val();
            pokemonPrice = parseFloat(pokemonPrice);
            total += pokemonPrice;

            $("#total").val(total);
          });

          $("#pokemonBreed5kBtn").click(function() {
            // Get the value of the Pokemon input
            var pokemonPrice = $("#pokemonBreed5k").val();
            pokemonPrice = parseFloat(pokemonPrice);
            total += pokemonPrice;

            $("#total").val(total);
        });

        });
      </script>
</body>
</html>
