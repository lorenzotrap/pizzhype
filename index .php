const request = require('request');

request({
  url: 'https://api.foursquare.com/v2/venues/explore',
  method: 'GET',
  qs: {
    client_id: 'FJSNCX5OSZQ3H4S3BCIIBEAMXU0XFOPK22CNRXNKQXTXHNGT',
    client_secret: 'BWGFBQSQYNRODHUZPUHPQE55KQ04XVX0T2LIOPMYGDQ2EAKM',
    ll: '40.7243,-74.0018',
    query: 'coffee',
    v: '20170801',
    limit: 1
  }
}, function(err, res, body) {
  if (err) {
    console.error(err);
  } else {
    console.log(body);
  }
});
