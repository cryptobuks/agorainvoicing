<div class="modal fade" id="edit-category-option">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Category</h4>
            </div>
            <div class="modal-body">
                <!-- Form  -->
                {!! Form::open(['url'=>'categories/option']) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <!-- name -->
                 @foreach($categories as $category)
                    {!! Form::label('name',Lang::get('message.name'),['class'=>'required']) !!}
                       <input type="text" id="edit-category-option" value="{{$category->name}}" class="form-control">
                        @endforeach
         <!--   @foreach($categories as $category)
            
                    {!! Form::text('name',null,['class' => 'form-control ourItem']) !!}
                  
                       @endforeach -->
                </div>
                


            </div>
            <div class="modal-footer">
                <button type="button" id="close" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="{{Lang::get('message.save')}}">
            </div>
            {!! Form::close()  !!}
            <!-- /Form -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->  
<!-- <script>
    $(document).ready(function() {
        $('.ourItem').each(function() {
            $(this).click(function(event){
                var text=$(this).text();
                 // $('#edit-category-option').val(text);
                $('#edit-category-option').val(text);

                console.log (text);
            });
        });


  
</script>
 -->