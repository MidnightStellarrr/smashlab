import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

export default function Settings() {
    return (
        <AuthenticatedLayout header={<h2 className="text-xl font-semibold text-white">Settings</h2>}>
            <Head title="Settings" />

            <div className="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
                <div className="rounded-2xl bg-white p-6 shadow-sm border border-gray-200">
                    <h1 className="text-2xl font-bold text-gray-800">Settings</h1>
                    <p className="mt-2 text-sm text-gray-600">
                        Manage your account preferences, notifications, and privacy settings here.
                    </p>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
