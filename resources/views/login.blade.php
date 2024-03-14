<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-100 w-auto" src="/images/logo.png">
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <input id="id" name="id" type="text" class="block h-12 w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="아이디">
                </div>

                <div>
                    <input id="password" name="password" type="password" class="block h-12 w-full rounded-md border-0 p-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="비밀번호">
                </div>

                <div>
                    <button type="submit" class="flex h-10 w-full justify-center rounded-md text-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 shadow-sm hover:bg-gray-100 border">로그인</button>
                    <button type="button" class="flex h-10 w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 mt-5">회원가입</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>