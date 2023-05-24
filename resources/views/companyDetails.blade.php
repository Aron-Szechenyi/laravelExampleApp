<div class="bg-black" style="width: 100%; height: calc(100% - 2.5rem); margin-top: 2rem;">
    <div class="container">
        <h2>{{$company->companyName}}</h2>
        <table class="table">
            <form method="post" action="{{url('company/update')}}">
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
                        <input type="submit" value="Update">
                    </td>
            </form>
            <td>
                <form method="post" action="{{url('company/delete')}}">
                    @csrf
                    <input type="hidden" value="{{$company->id}}" name="Id">
                    <input type="submit" value="delete">
                </form>
            </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
