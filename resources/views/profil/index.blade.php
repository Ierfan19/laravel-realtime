<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/css/bootstrap.min.css" integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div id="appVue">
        <a class="btn btn-success" href="{{url('/profil/create')}}">Tambah</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Usia</th>
                </tr>
            </thead>
            <tbody id="profil">

                <!-- <tr v-for="items in data_profil" :key="items.nama">
                    <th scope="row"></th>
                    <td colspan="2">@{{ items.nama }}.........</td>
                    <td>@{{items.usia}}</td>
                </tr> -->
            </tbody>
        </table>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        var vueDataProfil = new Vue({
            el: "#appVue",
            data: {
                data_profil: []
            },
            mounted() {
                this.getData();
            },
            methods: {
                getData: function() {
                    let url = "{{url('/profil/data')}}"

                    axios.get(url).then(resp => {
                            console.log(resp.data)
                            this.data_profil = resp.data
                        })
                        .catch(err => {
                            console.log(err)

                        })
                }
            }
        })
    </script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        loadProfil()

        function loadProfil() {

            $.ajax({
                type: "get",
                url: "{{url('/profil/data')}}",
                data: {},
                success: function(data) {
                    $('#profil').html('')
                    $.each(data, function(i, profil) {
                        $.each(profil, function(q, val) {
                            $('#profil').append(
                                "<tr> " + q + "<td></td><td>" + val.nama + "</td><td>" + val.usia + "</td></tr>"
                            )
                        })
                    })

                }
            })
        }
    </script>
    <script src="js/app.js"></script>
    <script>
        window.Echo.channel('profil').listen('ProfilCreated', (event) => {
            console.log(event)
            // vueDataProfil.getData()
            loadProfil()

        })
    </script>
</body>

</html>