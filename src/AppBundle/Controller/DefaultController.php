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

        $manager = $this->getDoctrine()->getManager();
        $coupons = $manager->getRepository(Coupon::class)->getFilteredCoupons(
            $request->query->get('brand'),
            $request->query->get('value'),
            $request->query->get('limit')
        );
        $coupons = $this->prepareCoupons($coupons);
        $response->setData($coupons);

        return $response;
    }

    /**
     * @param array $coupons
     * @return array
     */
    private function prepareCoupons($coupons){
        foreach ($coupons as $key => $coupon){
            unset($coupons[$key]['id']);
        }
        return$coupons;
    }
}
