import React from "react";
import useToggle from "@/Hooks/useToggle";
import Drawer from "@/Mobile/Drawer";
import HeaderHomeThree from "@/components/HeaderHomeThree";
import Cathead from "@/components/cathead";
import About from "@/components/about";
import Footer from "@/components/footer";

export default function Details(props) {
    const [drawer, drawerAction] = useToggle(false);
    return (
        <>
            <Drawer drawer={drawer} action={drawerAction.toggle} />
            <HeaderHomeThree action={drawerAction.toggle} />
            <Cathead headertitle={props.cattype} />
            <About
                type={props.cattype}
                data={props.news}
                data1={props.news2}
                data2={props.news3}
                data3={props.news4}
            />
            <Footer data={props.news} />
        </>
    );
}
