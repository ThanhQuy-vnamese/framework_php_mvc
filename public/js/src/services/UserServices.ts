import axios, { AxiosResponse } from 'axios';

interface LoginParams {
    email: string;
    password: string;
}

interface ResponseParams {
    isLogin: boolean;
    userInfo: {
        userId: string;
        email: string;
        accessToken: string;
    };
}

export class UserService {
    public login({ email, password }: LoginParams): void {
        const accessToken = JSON.parse(
            localStorage.getItem('user') ?? '{}'
        ).accessToken;
        const url = '/api/login';

        axios
            .post(
                url,
                {
                    email,
                    password
                },
                {
                    responseType: 'json',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded'
                    }
                }
            )
            .then((result: AxiosResponse<ResponseParams>) => {
                const info = result.data;
                if (info.isLogin) {
                    console.log(result);
                    localStorage.setItem('user', JSON.stringify(info.userInfo));
                }
            })
            .catch((error: any) => {
                console.log(error);
            });
    }
}
