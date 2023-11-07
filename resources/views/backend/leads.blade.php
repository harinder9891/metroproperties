@extends('backend.layout.app')
@section('content')

<style>
.large-content-cell div {
    max-width: 100%; /* Adjust the maximum width as needed */
    white-space: pre-line;
    word-wrap: break-word;
    text-align: left; /* Adjust alignment as needed */
    font-size: 16px; /* Adjust font size as needed */
    padding: 10px; /* Add padding as needed */
    margin: 0; /* Adjust margins as needed */
}
</style>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Leads</h4>
            <p class="card-description">
              All Leads
            </p>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Laed Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($collection as $item)
                        
                    <tr> 
                      <td>{{$item->id}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->email}}</td>
                      <td>{{$item->phone}}</td>
                      <td>{{$item->subject}}</td>
                      <td class="large-content-cell"> <div>{{$item->message}}</div></td>
                      <td style="display: none"><input type="hidden" name="" id="data-id" value="{{$item->id}}"></td>
                      <td>
                        <select name="lead_status" id="lead_status">
                            <option value="Not Contacted" @if ($item->lead_status == 'Not Contacted') selected @endif >Not Contacted</option>
                            <option value="Contacted" @if ($item->lead_status == 'Contacted') selected @endif >Contacted</option>
                            <option value="Converted to Client" @if ($item->lead_status == 'Converted to Client') selected @endif >Converted to Client</option>
                            <option value="Property Viewing Scheduled"@if ($item->lead_status == 'Property Viewing Scheduled') selected @endif>Property Viewing Scheduled</option>
                            <option value="Closed Sale" @if ($item->lead_status == 'Closed Sale') selected @endif>Closed Sale</option>
                            <option value="Closed Lost" @if ($item->lead_status == 'Closed Lost') selected @endif>Closed Lost</option> 
                            <option value="Qualified Lead" @if ($item->lead_status == 'Qualified Lead') selected @endif>Qualified Lead </option>
                            <option value="Disqualified" @if ($item->lead_status == 'Disqualified') selected @endif>Disqualified </option>
                            <option value="Not Interested" @if ($item->lead_status == 'Not Interested') selected @endif>Not Interested</option>
                            <option value="Follow-Up" @if ($item->lead_status == 'Follow-Up') selected @endif>Follow-Up</option>
                            <option value="On Hold" @if ($item->lead_status == 'On Hold') selected @endif>On Hold</option>
                        <option value="Unresponsive" @if ($item->lead_status == 'Unresponsive') selected @endif>Unresponsive</option>
                        </select>
                      </td>
                      <td>
                        <form method="POST" action="{{ route('lead.destroy', $item->id) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="badge badge-danger">Delete </button>
                        </form>
                      </td>
                    </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
</div>

<script>

$(document).ready(function () {
        $('select[name="lead_status"]').on('change', function () {
            var selectedValue = $(this).val();
            var row = $(this).closest('tr');
            var rowId = row.find('input[id="data-id"]').val();

            // Make an AJAX request to update the lead status based on the selected value
            $.ajax({
                url: "{{ route('lead.update') }}", // Replace with your route
                method: "get",
                data: {
                    id: rowId,
                    value: selectedValue
                },
                success: function (response) {
                    // Handle the response and update your page content
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        });
    });

</script>

@endsection