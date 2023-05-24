<div class="bg-black" style="width: 100%; height: calc(100% - 2.5rem); margin-top: 2rem;">
    <div class="container">
        <table class="table">
            <form method="post" action="{{url('company/create')}}">
                @csrf
                <tbody>
                <tr>

                    <th scope="col">Company name</th>
                    <td>
                        <input type="text" class="form-control" size="30" name="companyName"">
                    </td>
                </tr>
                
                <tr>
                    <th scope="col">Tax number</th>
                    <td>
                        <input type="text" class="form-control" size="30" name="taxNumber"">
                    </td>
                </tr>

                <tr>
                    <th scope="col">Phone number</th>
                    <td>
                        <input type="text" class="form-control" size="30" name="phoneNumber"">
                    </td>
                </tr>

                <tr>
                    <th scope="col">Email</th>
                    <td>
                        <input type="text" class="form-control" size="30" name="emailAddress">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="Create">
                    </td>
            </form>
            </tr>
            </tbody>
        </table>
    </div>
</div>
