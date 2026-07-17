import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import TextInput from '@/Components/TextInput';
import { Head, Link, useForm } from '@inertiajs/react';

export default function Register() {
    const { data, setData, post, processing, errors, reset } = useForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
    });

    const submit = (e) => {
        e.preventDefault();
        post(route('register'), {
            onFinish: () => reset('password', 'password_confirmation'),
        });
    };

    return (
        <>
            <Head title="Register" />

            <div
                className="flex min-h-screen w-full items-center justify-center"
                style={{
                    backgroundImage:
                        "linear-gradient(135deg, #0a1628 0%, #1a2a4a 50%, #2a3a6a 100%)",
                    backgroundSize: "cover",
                    backgroundPosition: "center",
                    backgroundRepeat: "no-repeat",
                }}
            >
                <div className="w-full max-w-md px-6">

                    {/* Logo */}
                    <div className="mb-8 flex justify-center">
                        <img src="/images/logo.png" className="h-16 w-auto" alt="SmashLab" />
                    </div>

                    <h1 className="mb-2 text-center text-4xl font-bold text-white">
                        CREATE ACCOUNT
                    </h1>

                    <p className="mb-8 text-center text-sm text-gray-300">
                        Register to start booking courts and managing your account.
                    </p>

                    <form onSubmit={submit} className="space-y-5">

                        <div>
                            <InputLabel htmlFor="name" value="" className="hidden" />
                            <TextInput
                                id="name"
                                name="name"
                                value={data.name}
                                autoComplete="name"
                                isFocused
                                onChange={(e) => setData("name", e.target.value)}
                                placeholder="Full Name"
                                required
                                className="w-full rounded-full border border-white/30 bg-white/10 px-6 py-3 text-white placeholder-gray-400 focus:border-white/60 focus:ring-0"
                            />
                            <InputError message={errors.name} className="mt-2 text-sm text-red-400" />
                        </div>

                        <div>
                            <InputLabel htmlFor="email" value="" className="hidden" />
                            <TextInput
                                id="email"
                                type="email"
                                value={data.email}
                                autoComplete="username"
                                onChange={(e) => setData("email", e.target.value)}
                                placeholder="Email"
                                required
                                className="w-full rounded-full border border-white/30 bg-white/10 px-6 py-3 text-white placeholder-gray-400 focus:border-white/60 focus:ring-0"
                            />
                            <InputError message={errors.email} className="mt-2 text-sm text-red-400" />
                        </div>

                        <div>
                            <InputLabel htmlFor="password" value="" className="hidden" />
                            <TextInput
                                id="password"
                                type="password"
                                value={data.password}
                                autoComplete="new-password"
                                onChange={(e) => setData("password", e.target.value)}
                                placeholder="Password"
                                required
                                className="w-full rounded-full border border-white/30 bg-white/10 px-6 py-3 text-white placeholder-gray-400 focus:border-white/60 focus:ring-0"
                            />
                            <InputError message={errors.password} className="mt-2 text-sm text-red-400" />
                        </div>

                        <div>
                            <InputLabel htmlFor="password_confirmation" value="" className="hidden" />
                            <TextInput
                                id="password_confirmation"
                                type="password"
                                value={data.password_confirmation}
                                autoComplete="new-password"
                                onChange={(e) => setData("password_confirmation", e.target.value)}
                                placeholder="Confirm Password"
                                required
                                className="w-full rounded-full border border-white/30 bg-white/10 px-6 py-3 text-white placeholder-gray-400 focus:border-white/60 focus:ring-0"
                            />
                            <InputError message={errors.password_confirmation} className="mt-2 text-sm text-red-400" />
                        </div>

                        <button
                            type="submit"
                            disabled={processing}
                            className="mt-2 w-full rounded-full bg-white py-3 text-lg font-bold text-gray-900 transition hover:bg-gray-200 disabled:opacity-50"
                        >
                            Register
                        </button>

                        <div className="relative my-6">
                            <div className="absolute inset-0 flex items-center">
                                <div className="w-full border-t border-white/20"></div>
                            </div>
                            <div className="relative flex justify-center text-sm">
                                <span className="bg-transparent px-4 text-gray-400">or continue with</span>
                            </div>
                        </div>

                        <div className="flex gap-4">
                            <button
                                type="button"
                                className="flex flex-1 items-center justify-center gap-2 rounded-full border border-white/30 bg-white/10 py-3 text-sm font-medium text-white transition hover:bg-white/20"
                            >
                                <svg className="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z" fill="#4285F4"/>
                                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
                                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                                </svg>
                                Google
                            </button>
                            <button
                                type="button"
                                className="flex flex-1 items-center justify-center gap-2 rounded-full border border-white/30 bg-white/10 py-3 text-sm font-medium text-white transition hover:bg-white/20"
                            >
                                <svg className="h-5 w-5" fill="#1877F2" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                                Facebook
                            </button>
                        </div>

                        <div className="pt-4 text-center">
                            <Link
                                href={route("login")}
                                className="text-sm text-gray-300 transition hover:text-white"
                            >
                                Already have an account? <span className="font-semibold text-white">Login</span>
                            </Link>
                        </div>

                    </form>

                </div>
            </div>
        </>
    );
}