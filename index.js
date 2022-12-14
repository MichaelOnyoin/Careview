
paypal.Buttons({
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                
                amount: {
                    value: '17.30'
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace("")
        })
    },
    onCancel: function (data) {
        window.location.replace("http://localhost/Careview/payment.php")
    }
}).render('#paypal-payment');