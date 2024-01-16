<?php

    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Cache\RateLimiter;
    use Symfony\Component\HttpFoundation\Response;

    class RateLimitContactUs
    {
        public function handle($request, Closure $next, $maxAttempts = 5, $decayMinutes = 1)
        {
            $key = $this->resolveRequestSignature($request);

            if ($this->limiter()->tooManyAttempts($key, $maxAttempts)) {
                $request->session()->put('contact-failure', 'You\'ve attempted to contact us too many times recently; Please try again later...');
                return redirect()->back();
            }

            $this->limiter()->hit($key, $decayMinutes * 60);

            return $next($request);
        }

        protected function resolveRequestSignature($request)
        {
            return sha1(
                $request->method() .
                '|' . $request->server('SERVER_NAME') .
                '|' . $request->path() .
                '|' . $request->ip()
            );
        }

        protected function limiter()
        {
            return app(RateLimiter::class);
        }
    }
