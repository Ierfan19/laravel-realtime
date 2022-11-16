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
    <div class="container">
        <form action="{{url('/profil/create')}}" method="post">
            {{csrf_field()}}
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="usia" class="form-label">usia</label>
                <input type="number" class="form-control" id="usia" name="usia">
            </div>
            <button class="bagde badge-primary" type="submit">send</button>
        </form>
    </div>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.45/vue.cjs.js" integrity="sha512-7m9S6PzUY75+/V5GIWRP19NFD1MgYpzbmbbSfUMnj8PMtkOj/XZs4BmxXvXku2litdO4qDrVhGtFkk2MVWlpcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        var vueDataProfil = new vue({
            el: "#appVue",
            data: {
                data_profil: []
            },
            mounted() {
                this.getData();
            },
            methods: {
                getData: function() {
                    let url = "{{url('/profil')}}"

                    axios.get(url).then(resp => {
                            this.data_profil = resp.data.data
                        })
                        .catch(err => {
                            console.log(err)

                        })
                }
            }
        })
    </script>
    <script src="{{url('js/app.js')}}"></script>
    <script>
        window.Echo.channel('message').listen('ProfilCreated', (event) => {
            vueDataProfil.getData()
        })
    </script> -->
</body>

</html>