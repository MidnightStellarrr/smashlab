import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

export default function Settings() {
    return (
        <AuthenticatedLayout header={<h2 className="text-xl font-semibold text-gray-800 dark:text-white">Settings</h2>}>
            <Head title="Settings" />

            <div className="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
                <div className="rounded-2xl bg-white p-6 shadow-sm border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <h1 className="text-2xl font-bold text-gray-800 dark:text-white">Settings</h1>
                    <p className="mt-2 text-sm text-gray-600 dark:text-gray-300">
                        Manage your account preferences, notifications, and privacy settings here.
                    </p>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}