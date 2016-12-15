@extends('app')
@section('content')
<div class="container">
		<div class="showalert"></div>
        <div id="jsGrid"></div>
</div>
        <script>
        // csrf token
        $.ajaxSetup({
		   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
		});	

			//data in json
            var clients = {!! json_encode($datas->toArray()) !!};

            $("#jsGrid").jsGrid({

                width: "100%",
                height: "800px",
         
	 			filtering: true,
	            inserting: true,
	            editing: true,
	            sorting: true,
	            paging: true,
	            autoload: true,
	            pageButtonCount: 5,
	            deleteConfirm: "Do you really want to delete client?",
	            controller: {
	            	// insert item
	            	insertItem: function(item) {
				        return $.ajax({
				            type: "PUT",
				            url: "{{url('insert')}}",
				            data: item,
					        success: function(data){
					        	alert("Added Successfully");
					        },
					        error: function(data){
					        	alert("Added Fail");
					        }
				        });
				    },
				      
				    // update
		           updateItem: function(item) {
		           	var cid = item.id;
				        return $.ajax({
				            type: "POST",
				            url: "{{url('edit')}}" + "/" + cid,
				            data: item
				        });
				    },

				    //delete item
	               deleteItem: function(item) {
	               	var cid = item.id;
		               	return $.ajax({
	                        type: "DELETE",
	                        url:"{{url('delete')}}"+"/"+cid, 
	                    });
			        },
				},
				
                data: clients,
         		
                fields: [
                    { name: "year",  title: "Year", type: "text", width: 30 },
                    { name: "coa", title: "COA",  type: "text", width: 30 },
                    { name: "description", title: "Description", type:"text", width: 300 },
                    { name: "debit-credit", title: "Debit-Credit", type:"text", width: 40},
                    { name: "amount",  title: "Amount", type:"text", width: 30},
                    { type: "control" }
                ]
            });
        </script>        
@endsection