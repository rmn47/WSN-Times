import React from "react";
import useToggle from "@/Hooks/useToggle";
import Drawer from "@/Mobile/Drawer";
import HeaderHomeThree from "@/components/HeaderHomeThree";
import Cathead from "@/components/cathead";
import Cat from "@/components/cat";
import Footer from "@/components/footer";
import "@/assets/css/style.css";

export default function Category(props) {
    const [drawer, drawerAction] = useToggle(false);

    return (
        <>
            <Drawer drawer={drawer} action={drawerAction.toggle} />
            <HeaderHomeThree action={drawerAction.toggle} />
            {props.subcattype ? (
                props.ssubcattype ? (
                    <Cathead
                        headertitle={props.cattype}
                        subheader={props.subcattype}
                        subheader2={props.ssubcattype}
                    />
                ) : (
                    <Cathead
                        headertitle={props.cattype}
                        subheader={props.subcattype}
                    />
                )
            ) : (
                <Cathead headertitle={props.cattype} />
            )}
            {props.subcattype ? (
                <Cat
                    data={props.news}
                    data1={props.newsp2}
                    data2={props.news1}
                    data3={props.news2}
                    data4={props.news3}
                    data5={props.news4}
                    type1={props.subcattype}
                />
            ) : (
                <Cat
                    data={props.news}
                    data1={props.newsp2}
                    data2={props.news1}
                    data3={props.news2}
                    data4={props.news3}
                    data5={props.news4}
                    type={props.cattype}
                />
            )}

            <Footer data={props.news6} />
        </>
    );
}
