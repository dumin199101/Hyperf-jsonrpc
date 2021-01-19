<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;
use App\RPC\CalculatorServiceInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;

/**
 * Class IndexController
 * @package App\Controller
 * @AutoController()
 */
class IndexController extends AbstractController
{
    /**
     * @var CalculatorServiceInterface
     * @Inject()
     */
    public $caltulatorService;

    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }

    public function rpc()
    {
//       return $this->caltulatorService->add(1,2);
       return $this->caltulatorService->minus(10,2);
    }
}
