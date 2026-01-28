<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ConsultController extends Controller
{
    public function submit(Request $request, string $type)
    {
        $type = strtolower($type);
        if (!in_array($type, ['hoc', 'crm'], true)) {
            abort(404);
        }

        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:255'],
        ];

        if ($type === 'hoc') {
            $rules['content'] = ['required', 'string', 'max:2000'];
        } else {
            $rules['note'] = ['required', 'string', 'max:2000'];
        }

        $data = $request->validate($rules);

        $subject = $type === 'hoc' ? 'Yêu cầu tư vấn học' : 'Yêu cầu tư vấn CRM';
        $bodyLines = [
            'Loại tư vấn: ' . ($type === 'hoc' ? 'Tư vấn học' : 'Tư vấn CRM'),
            'Họ tên: ' . $data['name'],
            'Số điện thoại: ' . $data['phone'],
            'Email: ' . $data['email'],
            $type === 'hoc'
                ? 'Nội dung muốn học: ' . ($data['content'] ?? '')
                : 'Ghi chú: ' . ($data['note'] ?? ''),
            'Trang gửi: ' . $request->headers->get('referer'),
        ];

        $body = implode("\n", $bodyLines);

        try {
            Mail::send([], [], function ($message) use ($data, $subject, $body) {
                $message->to('hienu.cskh@gmail.com')
                    ->subject($subject)
                    ->setBody(nl2br(e($body)), 'text/html');

                if (!empty($data['email'])) {
                    $message->replyTo($data['email'], $data['name'] ?? $data['email']);
                }
            });
        } catch (Throwable $e) {
            report($e);
            if ($request->expectsJson()) {
                return response()->json([
                    'ok' => false,
                    'message' => 'Gửi yêu cầu thất bại. Vui lòng thử lại sau.',
                ], 500);
            }

            return back()->withErrors([
                'consult' => 'Gửi yêu cầu thất bại. Vui lòng thử lại sau.',
            ])->withInput();
        }

        if ($request->expectsJson()) {
            return response()->json([
                'ok' => true,
                'message' => 'Gửi yêu cầu thành công!',
            ]);
        }

        return back()->with('status', 'Gửi yêu cầu thành công!');
    }
}
