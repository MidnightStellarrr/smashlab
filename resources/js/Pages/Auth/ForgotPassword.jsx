import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import TextInput from '@/Components/TextInput';
import { Head, Link, useForm } from '@inertiajs/react';

export default function ForgotPassword({ status }) {
    const { data, setData, post, processing, errors } = useForm({
        email: '',
    });

    const submit = (e) => {
        e.preventDefault();
        post(route('password.email'));
    };

    return (
        <>
            <Head title="Forgot Password" />

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

                    {/* Title */}
                    <h1 className="mb-2 text-center text-4xl font-bold text-white">
                        RESET PASSWORD
                    </h1>

                    <p className="mb-8 text-center text-sm text-gray-300">
                        Enter your email address and we'll send you a link to reset your password.
                    </p>

                    {/* Status Message - Minimal */}
                    {status && (
                        <div className="mb-4 text-center text-sm text-white">
                            {status}
                        </div>
                    )}

                    {/* Form */}
                    <form onSubmit={submit} className="space-y-5">

                        {/* Email */}
                        <div>
                            <InputLabel htmlFor="email" value="" className="hidden" />
                            <TextInput
                                id="email"
                                type="email"
                                name="email"
                                value={data.email}
                                className="w-full rounded-full border border-white/30 bg-white/10 px-6 py-3 text-white placeholder-gray-400 focus:border-white/60 focus:ring-0"
                                isFocused={true}
                                onChange={(e) => setData('email', e.target.value)}
                                placeholder="Email"
                                required
                            />
                            <InputError message={errors.email} className="mt-2 text-sm text-red-400" />
                        </div>

                        {/* Send Reset Link Button */}
                        <button
                            type="submit"
                            disabled={processing}
                            className="mt-2 w-full rounded-full bg-white py-3 text-lg font-bold text-gray-900 transition hover:bg-gray-200 disabled:opacity-50"
                        >
                            Send Reset Link
                        </button>

                        {/* Back to Login Button - White Border, No BG, White Text */}
                        <Link
                            href={route("login")}
                            className="mt-4 flex w-full items-center justify-center rounded-full border border-white py-3 text-lg font-bold text-white transition hover:bg-white/10"
                        >
                            ← Back to Login
                        </Link>

                    </form>

                </div>
            </div>
        </>
    );
}