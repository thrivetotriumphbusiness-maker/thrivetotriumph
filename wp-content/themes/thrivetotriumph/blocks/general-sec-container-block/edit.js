import { useDispatch } from "@wordpress/data";
import {
  useBlockProps,
  useInnerBlocksProps,
  InspectorControls,
  BlockControls,
} from "@wordpress/block-editor";
import { store as noticesStore } from "@wordpress/notices";
import { ToolbarGroup, ToolbarButton } from "@wordpress/components";
import './editor.scss';

export default function Edit({ attributes, setAttributes }) {
  const blockProps = useBlockProps();
  const innerBlocksProps = useInnerBlocksProps({
     className: 'col-12 position-relative last-paragraph-no-margin',
     'data-anime': '{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'
  });
  return (
    <section {...blockProps}>
      <div class="container position-relative">
        <div class="row justify-content-center">
            <div {...innerBlocksProps} />
        </div>
      </div>
    </section>
  );
}
