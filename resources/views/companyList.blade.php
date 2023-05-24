<div>
    <form action="{{url('company')}}/create" method="get">
        <input type="submit" value="Create new">
    </form>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Tax number</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach($companies as $company)
        <tr>
            <th scope="row">{{$company->id}}</th>
            <td>{{$company->companyName}}</td>
            <td>{{$company->taxNumber}}</td>
            <td>
                <form action="{{url('company')}}/list/{{$company->id}}" method="post">
                    @csrf
                    <input type="submit" value="Details">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
