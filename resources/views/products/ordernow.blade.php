<x-layout xmlns="http://www.w3.org/1999/html">
    <section class="container">
        <div class="custom-product">
            <div class="col-sm-10">
                <table class="table table-striped" style="margin-top: 40px">
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Amount</td>
                        <td>${{ $total }}</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Tax</td>
                        <td>$0</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Delivery Charges</td>
                        <td>$10</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Total Amount</td>
                        <td>${{ $total + 10 }}</td>
                    </tr>
                    </tbody>
                </table>
                <div>
                    <form action="/orderaction" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label style="" for="address">Address:</label>
                           <div>
                               <textarea name="address" placeholder="Address" class="form-md-control" > </textarea>
                           </div>
                            <fieldset class="mb-3" style="margin-top: 20px">
                                <legend>Payment Method</legend>
                                <p><label for="online payment"> <input type="radio" id="online payment" name="payment" value="cash"> Online Payment </label> </p>
                                <p><label for="emi payment"> <input type="radio" id="emi payment" name="payment" value="cash"> EMI Payment </label></p>
                                <p><label for="payment on delivery"><input type="radio" id="payment on delivery" name="payment" value="cash"> Payment On Delivery</label></p>
                            </fieldset>
                        </div>
                        <button type="submit" class="btn btn-primary">Order Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>
