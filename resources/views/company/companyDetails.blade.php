<div class="bg-black m-lg-5">
    @if($errors->any())
        <div class="bg-red-200 p-3">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container p-2 m-1">
        <h2 class="text-center">{{$company->companyName}}</h2>
        <table class="table text-white table-borderless">
            <form method="post" action="{{route('companyUpdate')}}">
                @csrf
                <tbody>
                <tr>
                    <th scope="col">Company name</th>
                    <td>
                        <input type="hidden" value="{{$company->id}}" name="Id">
                        <input type="text" class="form-control" size="30" name="companyName"
                               value="{{$company->companyName}}">
                    </td>
                </tr>

                <tr>
                    <th scope="col">Tax number</th>
                    <td>
                        <input type="text" class="form-control" size="30" name="taxNumber"
                               value="{{$company->taxNumber}}">
                    </td>
                </tr>

                <tr>
                    <th scope="col">Phone number</th>
                    <td>
                        <input type="text" class="form-control" size="30" name="phoneNumber"
                               value="{{$company->phoneNumber}}">
                    </td>
                </tr>

                <tr>
                    <th scope="col">Email</th>
                    <td>
                        <input type="text" class="form-control" size="30" name="emailAddress"
                               value="{{$company->emailAddress}}">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="btn-warning" type="submit" value="Update">
                    </td>
            </form>
            <td>
                <form method="post" action="{{route('companyDelete')}}">
                    @csrf
                    <input type="hidden" value="{{$company->id}}" name="Id">
                    <input class="btn-danger" type="submit" value="delete">
                </form>
            </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
