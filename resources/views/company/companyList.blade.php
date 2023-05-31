<div>
    <form action="{{route('companyGetForm')}}" method="get">
        <input class="btn-success" type="submit" value="Create new">
    </form>
</div>
<table class="table text-white table-borderless">
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
                <form action="{{route('companyList',['company'=>$company->id])}}" method="post">
                    @csrf
                    <input class="btn-secondary" type="submit" value="Details">
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
