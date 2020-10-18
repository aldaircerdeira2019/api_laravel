<script type="text/javascript">
    $(document).ready(function () {
        $.ajax({
            type: 'GET',
            url: "{{URL::route('filme.index')}}",
            success: function(data) {
                    if(data.filmes != null){
                    var response = data.filmes.data;
                    $.each(response, function(index) { 
                        $('#filmes').prepend("<div class='col-sm-6' style='margin: 2rem'><div class='card py-5' style='width: 28rem;'><div class='card-body'><h5 class='card-title'>"+response[index].name_filme+"</h5><p class='card-text'>"+response[index].descricao+"</p><a href='#' onclick='modalShow("+response[index].id+")' class='btn btn-primary btn-sm'>Mais detalhes</a></div></div></div>");
                    n = index;
                    });
                    $('#Load').remove();
                } 
            }
        });
    });
</script>  
{{-- <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div> --}}