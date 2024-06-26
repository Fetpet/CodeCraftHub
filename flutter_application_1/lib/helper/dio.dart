import 'package:dio/dio.dart';

Dio dio() {
  var dio = Dio(
    BaseOptions(
      baseUrl: 'http://10.0.2.2:80000/api/',
      headers: {
        'accept': 'application/json',
        'content-type': 'application/json'
      },
      responseType: ResponseType.json,
    ),
  );

  // dio
  //   ..interceptors.add(InterceptorsWrapper(
  //       onRequest: ((options, handler) => requestInterceptor(options))));

  return dio;
}

// dynamic requestInterceptor(RequestOptions options) async {
//   if (options.headers.containsKey('auth')) {
//     var token = await Auth().getToken();

//     options.headers.addAll({
//       'Authorization': 'Bearer $token',
//     });
//   }
// }
