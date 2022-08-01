<div>
    <div class="p-6 bg-white border-b border-gray-200 ">
        <form class="w-25" action="{{route('api.index')}}" method="post">
            @method('post')
            <div class="mb-3 ">
                <input type="hidden" name="transaction_type" value="card" >
              <label for="exampleInputEmail1" class="form-label">Valor da Transação</label>
              <input type="text" class="form-control" name="transaction_amount">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Quantidade de parcelas</label>
              <input type="number" class="form-control" name="transaction_installments">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nome</label>
                <input type="text" class="form-control" name="customer_name">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">CPF</label>
                <input type="text" class="form-control" name="customer_document">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Número do Cartão</label>
                <input type="text" class="form-control" name="customer_card_number">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Validade</label>
                <input type="text" class="form-control" name="customer_card_expiration_date">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Código CVV</label>
                <input type="text" class="form-control" name="customer_card_cvv">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>