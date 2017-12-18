<div class="modal fade" id="edit-license-option">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit License</h4>
            </div>
            <div class="modal-body">
                <!-- Form  -->
                {!! Form::open(['url'=>'licenses/option']) !!}

                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <!-- name -->
                    {!! Form::label('name',Lang::get('message.name'),['class'=>'required']) !!}
                       
            @foreach($licenses as $license)
            
                    {!! Form::text('name',$license->name,['class' => 'form-control']) !!}
                    @endforeach

                       
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
<script>
    // function getState(val) {


    //     $.ajax({
    //         type: "POST",
    //         url: "{{url('get-state')}}",
    //         data: 'country_id=' + val,
    //         success: function (data) {
    //             $("#state-list").html(data);
    //         }
    //     });
    // }
</script>
