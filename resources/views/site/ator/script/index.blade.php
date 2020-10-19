<script type="text/javascript">
    $(document).ready(function () {
        $.ajax({
            type: 'GET',
            url: "{{URL::route('ator.index')}}",
            success: function(data) {
                    if(data.atores != null){
                    var response = data.atores.data;
                    $.each(response, function(index) { 
                        var genero = response[index].sexo == 'f' ? 'Feminino': 'masculino';
                        $('#atores').prepend("<div class='col-sm-6' style='margin: 2rem'><div class='card py-5' style='width: 28rem;'><img src='{{ asset('avatar01.jpg')}}' class='card-img-top' alt='...'><div class='card-body'><h5 class='card-title'>"+response[index].name_ator+"   |  ID: "+response[index].id+"   </h5><div class='card-text'><p><b>Data de nascimento :</b>"+response[index].data_nascimento+" <b>Genero: </b>"+genero+"</p><p>Email: <b></b>"+response[index].email+"</p><p><b>cadastrado em: </b>"+response[index].created_at+"</p></div><a href='#' onclick='deleteAtor("+response[index].id+")' class='btn btn-danger btn-sm'>Deletar</a></div></div></div>");
                    n = index;
                    });
                    $('#Load').remove();
                } 
            }
        });
    });
</script> 