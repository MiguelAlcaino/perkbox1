<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Coupon;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/coupons", name="coupons")
     */
    public function indexAction(Request $request)
    {
        $response = new JsonResponse();

        $headers = [];
        $query = [
            'limit' => $request->query->get('limit'),
            'brand' => $request->query->get('brand'),
            'value' => $request->query->get('value')
        ];
        $couponsResponse = \Unirest\Request::get(
            $this->getParameter('coupons_api_host').':'.$this->getParameter('coupons_api_port').'/coupons',
            $headers,
            $query
        );

        $response->setData($couponsResponse->body);

        return $response;
    }
}
